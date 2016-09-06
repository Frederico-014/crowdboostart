@extends('layout.master')
@section('content')
    <div class="container">
    <form action="{{url('event')}}" method="post" enctype="multipart/form-data">

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
        <input type="hidden" name="user_id" value="{{$user->id}}">
        <div class="form-group t_left">
            <label for="title">Titre:</label>
            <input class="form-control w33" id="title" type="text" name="title" value="{{old('title')}}">
        </div>
        <div class="form-group t_left">
            <label for="date">Date:</label>
            <input class="form-control w33" id="date " type="date" name="date" placeholder="jj/mm/aaaa">
        </div>
        <div class="form-group t_left">
            <label for="abstract">Resumé:</label>
            <input class="form-control w33" id="title" type="text" name="abstract" value="{{old('abstract')}}">
        </div>
        <div class="form-group">
            <label for="image">Image:</label>
            <input class="w33"  name="picture" type="file">
            @if($errors->has('picture'))
                <span class="admin error">{{$errors->first('picture')}}</span>
            @endif
        </div>
        <div class="form-group t_left">
            <label for="category">Category: </label>
            <select class="form-control w33" id="category_id" name="category_id">
                <option value="{{null}}"></option>
                @foreach($categories as $id => $title)
                    <option value="{{$id}}">{{$title}}</option>
                @endforeach
            </select>
        </div>
        <div class="center">
            <button class="btn btn-default" type="submit">Lancer votre spectacle</button>
        </div>
    </div>
@endsection