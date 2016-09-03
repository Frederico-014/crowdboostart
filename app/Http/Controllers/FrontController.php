<?php

namespace App\Http\Controllers;

use App\Category;
use App\Event;
use App\Profile;
use App\Tag;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Hash;

class FrontController extends Controller
{

    public function index()
    {
        $events = Event::orderBy("id")->take(6)->get();

        return view('front.index', compact('events'));
    }

    public function annonces()
    {
        $categories=Category::lists('name','id');

        $events = Event::orderBy('id')->take(3)->get();

        return view('front.annonces', compact('events','categories'));
    }

    public function search(Request $request)
    {
        $categories = Category::lists('name', 'id');
        $search = '';
        if (!empty($request->all())) {
            $search = $request->q;
            $events = Event::search($search)->orderBy("id")->paginate(9)->setPath('search?q=' . $search);

        }


        return view('front.discovery', ['events' => $events, 'search' => $search, 'categories' => $categories]);
    }

    public function newUser()
    {
        $profiles = Profile::lists('name', 'id');

        return view('front.inscription', compact('profiles'));
    }

    public function createUser(Request $request)
    {

        $this->validate($request, [
            'surname' => 'required',
            'firstname' => 'required',
            'username' => 'required',
            'bio' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);

        $surname=$request->surname;
        $firstname=$request->firstname;
        $username=$request->username;
        $email=$request->email;
        $bio=$request->bio;
        $password = Hash::make($request->password);


        $new_user = [
            'surname' => $surname,
            'firstname' => $firstname,
            'username' => $username,
            'bio' => $bio,
            'email' => $email,
            'password' => $password,
        ];



       $user=User::create($new_user);

        if (!empty($request->profiles)) {
            $user->profiles()->attach($request->profiles);
        }



        if ($request->type == 'creator'){

            $categories = Category::lists('name', 'id');
            return view('front.new',compact('categories','user'));
        }
        if ($request->type == 'booster'){
            return view('');
        }
    }

    public function newEvent()
    {
        $categories = Category::lists('name', 'id');
        return view('front.new',compact('categories'));
    }

    public function createEvent(Request $request){



        $img = $request->picture;
        $ext = $img->getClientOriginalExtension();
        $fileName = md5(uniqid(rand(), true)) . ".$ext";

        $uri =['image'=>$fileName];

        $img->move(env('UPLOADS'), $fileName);

        $event = array_merge($request->all(), $uri);

        Event::create($event);

        return view('auth.login');
    }

    public function showEvent($id)
    {
        $event = Event::find($id);

        return view('front.show', compact('event'));
    }

    public function discovery()
    {
        $categories = Category::lists('name', 'id');

        $events = Event::orderBy("id")->paginate(9);

        return view('front.discovery', compact('categories', 'events'));
    }

    public function showEventByCategory($id)
    {
        $categories = Category::lists('name', 'id');

        $category = Category::find($id);

        $events = $category->events()->paginate(9);

        return view('front.discovery', compact('categories', 'events'));
    }

    public function showEventByTag($id)
    {

        $events = Tag::find($id);


        return view('front.discovery', compact('categories', 'events'));
    }
}
