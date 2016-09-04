<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CrowBoostArt</title>
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
                <li {!! Request::url() == url('concept')? 'class="active_perso"' : '' !!}><a href="{{url('concept')}}"><img src="{{url('assets',['images','crowboostart','menu','Picto-concept.png'])}}" alt="concept">Le
                        Concept</a></li>
                <li {!! Request::url() == url('discovery')? 'class="active_perso"' : '' !!}><a href="{{url('discovery')}}"><img src="{{url('assets',['images','crowboostart','menu','Picto-voir-les-projets.png'])}}" alt="les projets">Voir
                        les projet</a></li>
                <li {!! Request::url() == url('creator')? 'class="active_perso"' : '' !!}><a href="{{url('concept')}}"><img src="{{url('assets',['images','crowboostart','menu','Picto-lancer-un-projet.png'])}}" alt="lancer un projet">Lancer
                        un projet</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right menu">
                @if(Auth::guest())
                    <li  class="cred" {!! Request::url() == url('login')? 'class="active"' : '' !!}><a href="{{url('login')}}">Se
                            Connecter<img src="{{url('assets',['images','crowboostart','menu','Picto-se-connecter.png'])}}" alt="connexion"></a></li>
                @else
                    <li class="cred"><a href="#"><img src="{{url('assets',['images','crowboostart','ppp-logue','menu','picto-messages.png'])}}" alt="message"></a></li>
                    <li class="cred"><a href="#"><img src="{{url('assets',['images','crowboostart','ppp-logue','menu','picto-notifications.png'])}}" alt="notification"></a></li>
                    <li class="dropdown cred">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="false"><img src="{{url('assets',['images','crowboostart','ppp-logue','menu','picto-profil.png'])}}" alt="profil"><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            @if(Auth::user() && Auth::user()->isAdmin())
                                <li><a href="#">Administration du site</a></li>
                                <li><a href="{{url('logout')}}">Se deconnecter</a></li>
                            @elseif(Auth::user())
                            <li><a href="#">Compte Porteur de projet</a></li>
                            <li><a href="#">Compte Booster</a></li>
                            <li><a href="{{url('logout')}}">Se deconnecter</a></li>
                            @endif
                        </ul>
                    </li>
                @endif
                <li><a href="#"><img src="{{url('assets',['images','crowboostart','menu','Picto-recherche.png'])}}" alt="rechercher"></a></li>
                <li><a href="#"><img src="{{url('assets',['images','crowboostart','menu','Sans-titre-1.png'])}}" alt="langue"></a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </nav>
</div>
    <section>
        @include('admin.partials.flash_message')
        @yield('content')
    </section>
<footer>
    <div class="container">
        <div>
            <ul class="ul_footer">
                <li><a href="#">L'EQUIPE</a></li><!--
                --><li><a href="#">CONDITION GENERALES</a></li><!--
                --><li><a href="#">MENTION LEGALES</a></li><!--
                --><li><a href="#">PRESS</a></li><!--
                --><li><a href="#">CONTACT</a></li>
            </ul>
        </div>
        <div>
            <ul class="ul_footer2">
                <li class="black">NOS PARTENAIRES</li>
                <li><a href="#"><img src="{{url('assets',['images','crowboostart','footer','logopoitou.jpg'])}}" alt="logopoitou"></a></li>
                <li><img src="{{url('assets',['images','crowboostart','footer','logobpi.jpg'])}}" alt="logobpi"></li>
                <li><img src="{{url('assets',['images','crowboostart','footer','logo-Poitou-Charentes_logoRegion.png'])}}" alt="logo-Poitou-Charentes_logoRegion"></li>
                <li><img src="{{url('assets',['images','crowboostart','footer','logo-ministere-de-la-culture.jpg'])}}" alt="logo-ministere-de-la-culture"></li>
            </ul>
        </div>
    </div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.js"></script>
<script src="{{url('assets/js/app.min.js')}}"></script>
</body>
</html>