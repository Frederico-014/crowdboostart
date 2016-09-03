@extends('layout.master')
@section('content')
    <div class="container vh70">
    <form class="form-signin" action="{{url('login')}}" method="post">
        {{csrf_field()}}
        <h2 class="form-signin-heading">Se Connecter</h2>
        <div class="form-group">
            <label  for="email" class="sr-only">Email: </label>
            <input class="form-control" type="email" name="email" value="{{old('email')}}" required autofocus>
            @if($errors->has('email'))
                <span class="admin_error">{{$errors->first('email')}}</span>
            @endif
        </div>
        <div class="form-group">
            <label for="password" class="sr-only">Password: </label>
            <input class="form-control" type="password" name="password" required>
            @if($errors->has('password'))
                <span class="admin_error">{{$errors->first('password')}}</span>
            @endif
        </div>
        <div class="checkbox">
            <label><input name="remember" type="checkbox">Se souvenir de moi</label>
            <input class="btn btn-primary" type="submit" value="Valider">
        </div>
    </form>
    </div>
@endsection
