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
    <link rel="stylesheet" href="{{url('assets/css/app.min.css')}}">
</head>
<body>
<nav class="navbar navbar-default navbar">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{url('')}}">Accueil</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav nav">
                <li {!! Request::url() == url('search')? 'class="active"' : '' !!}><a href="{{url('search')}}">Chercher</a></li>
                @if(Auth::guest())

                    <li {!! Request::url() == url('booster')? 'class="active"' : '' !!}><a
                                href="{{url('booster')}}">Booster</a></li>
                    <li {!! Request::url() == url('creator')? 'class="active"' : '' !!}><a
                                href="{{url('creator')}}">Creator</a></li>
                    <li {!! Request::url() == url('login')? 'class="active"' : '' !!}><a href="{{url('login')}}">Se
                            connecter</a></li>
                @else
                    @if(Auth::user() && Auth::user()->isAdmin())
                        <li><a href="#">Administration du site</a></li>
                    @endif
                    <li><a href="{{url('logout')}}">Se deconnecter</a></li>
                @endif
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
<div class="container">
    <section>
        @include('admin.partials.flash_message')
        @yield('content')
    </section>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
<script src="{{url('assets/js/app.min.js')}}"></script>
</body>
</html>