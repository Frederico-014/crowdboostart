<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CrowBoostArt</title>
    <link rel="icon" type="image/png" href="{{url('assets','CROWDBOOSTART-strar.png')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="{{url('assets/css/app.min.css')}}">
</head>
<body>
<div class="container">
    <nav class="navbar navbar-default navbar">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{url('')}}"> <img src="{{url('assets',['images','crowboostart','menu','slider','logo-menu.png'])}}" alt="logo"></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse ">
            <ul class="nav navbar-nav menu p_left">
                <li {!! Request::url() == url('concept')? 'class="active_perso"' : '' !!}><a href="{{url('concept')}}">Gestion des Projets</a></li>
                <li {!! Request::url() == url('discovery')? 'class="active_perso"' : '' !!}><a href="{{url('discovery')}}">Gestion des Institutions</a></li>
                <li {!! Request::url() == url('creator')? 'class="active_perso"' : '' !!}><a href="{{url('concept')}}">Gestion des Utilisateurs</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right menu">
                <li class="cred"><a href="#"><img src="{{url('assets',['images','crowboostart','ppp-logue','menu','picto-messages.png'])}}" alt="message"></a></li>
                <li class="cred"><a href="#"><img src="{{url('assets',['images','crowboostart','ppp-logue','menu','picto-notifications.png'])}}" alt="notification"></a></li>
                <li class="dropdown cred">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="false"><img src="{{url('assets',['images','crowboostart','ppp-logue','menu','picto-profil.png'])}}" alt="profil"></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('admin.event.index')}}">Administration du site</a></li>
                        <li><a href="{{url('logout')}}">Se deconnecter</a></li>
                    </ul>
                </li>
            </ul>
        </div><!--/.nav-collapse -->
    </nav>
</div>
<section>
    @include('admin.partials.flash_message')
    @yield('content')
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.js"></script>
<script src="{{url('assets/js/app.min.js')}}"></script>
</body>
</html>