@extends('layout.master')
@section('content')
    <div class="container">
    <form class="form" action="{{url('inscription')}}" method="post">

        {{csrf_field()}}
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="form-group">
            <label for="surname">Nom: </label>
            <input class="form-control w33" type="text" name="surname" value="{{old('surname')}}">
        </div>
        <div class="form-group">
            <label for="firstname">Prenom: </label>
            <input class="form-control w33" type="text" name="firstname" value="{{old('firstname')}}">
        </div>
        <div class="form-group">
            <label for="username">Pseudo: </label>
            <input class="form-control w33" type="text" name="username" value="{{old('username')}}">
        </div>
        <div class="form-group">
            <label for="email">Email: </label>
            <input class="form-control w33" type="email" name="email" value="{{old('email')}}">
        </div>
        <div class="form-group">
            <label for="password">Mot de passe: </label>
            <input class="form-control w33" type="password" name="password">
        </div>
        <div class="form-group">
            <label for="username">Localisation: </label>
            <input class="form-control w33" type="text" name="localisation" value="{{old('localisation')}}">
        </div>
        <div class="form-group">
            <label for="bio">Bio: </label>
            <textarea class="form-control" id="bio" name="bio" rows="10" cols="50">{{old('bio')}}</textarea>
        </div>
        @foreach($profiles as $id =>$name)
            <label class="checkbox">
                <input id="{{$id}}" TYPE=CHECKBOX NAME="profiles[]"
                       value="{{$id}}" {{!empty(old('profiles'))&& in_array($id,old('profiles'))? 'checked':''}}>{{$name}}
            </label>
        @endforeach
        @if(Request::url() == url('booster'))
            <input type="hidden" name="type" value="booster">
        @endif
        @if(Request::url() == url('creator'))
            <input type="hidden" name="type" value="creator">
        @endif
        <div class="center">
            <button class="btn btn-default" type="submit">S'incrire</button>
        </div>
    </form>
    </div>
@endsection

