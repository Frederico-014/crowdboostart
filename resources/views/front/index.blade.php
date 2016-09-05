@extends('layout.master')
@section('content')
    <div class="container">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="{{url('assets',['images','crowboostart','menu','slider','slide1.png'])}}" alt="First slide">
            </div>
            <div class="item">
                <img src="{{url('assets',['images','crowboostart','menu','slider','slide2.png'])}}" alt="Second slide">
            </div>
            <div class="item">
                <img src="{{url('assets',['images','crowboostart','menu','slider','slide3.png'])}}" alt="Third slide">
            </div>
        </div>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div>
        <h2 class="title annonces">Les annonces de la comunauté</h2>
        <p class="subtitle annonces">Entrer dans la communauté active et solidaire du spectacle vivant</p>
        <a href="{{url('annonces')}}"><img class="img_annonces" src="{{url('assets',['images','crowboostart','page_home','annonces','Damier-annonces.jpg'])}}" alt=annonces""></a>
    </div>
    <div>
        <h2 class="title projet">Des projets à booster</h2>
        <p class="subtitle">Ensemble soutenons le spectacle vivant</p>
    </div>
    @forelse ($events as $event )
        <div class="w33 vtop">
            <div class="bgcwhite">
            <a href="{{url('show',$event->id)}}">
                <img class="img-responsive" src="{{url('assets',['images',$event->image])}}"
                     alt="{{$event->image}}">
                <div class="p10">
                    <p class="event_title"><b>{{$event->title}}</b></p>
                    <p class="event_user">Par: <b class="heavy">{{$event->user->username}}</b></p>
                    <p class="event_abstract">{{$event->abstract}}</p>
                </div>
                <div class="line">
                    <div class="w33 vtop">
                        <img src="{{url('assets',['images','crowboostart','page_home','partie_projet','picto-boosters-projet.png'])}}" alt="boosters">
                        <p class="details"> {{rand(2 , 100)}} boosters</p>
                    </div><!--
                    --><div class="w33 vtop">
                        <img src="{{url('assets',['images','crowboostart','page_home','partie_projet','picto-date-projet.png'])}}" alt="date">
                        <p class="details"> Depuis {{ rand(2, 30) }} jours</p>
                    </div><!--
                    --><div class="w33 vtop">
                        @if($event->start == '0')
                            <img src="{{url('assets',['images','crowboostart','page_home','partie_projet','picto-news-projet.png'])}}" alt="date">
                            <p class="details">{{ rand( 2, 15)}} news </p>
                        @else
                            <img src="{{url('assets',['images','crowboostart','page_home','partie_projet','etoile.png'])}}" alt="date">
                            <p class="details">{{ rand(500 , 5000) }}€ recoltées</p>
                        @endif
                    </div>
                </div>
            </a>
            </div>
        </div>
    @empty
    @endforelse
    <div class="w38 vtop">
        <div class="c1">
            <h3 class="titlecontact title38">Un projet, une idée, un besoin, nous vous écoutons </h3>
            <p class="p15"><button type="submit" class="btn btn-default contact_us">CONTACTER NOUS</button></p>
        </div>
    </div><!--
    --><div class="w27 vtop">
        <div class="c2">
            <h3 class="titlecontact title27">Nous suivre <span class="span">Restez connectés</span></h3>
            <img class="i33" src="{{url('assets',['images','crowboostart','page_home','reseauxsociaux','instagram.png'])}}" alt="instagram"><!--
            --><img class="i33" src="{{url('assets',['images','crowboostart','page_home','reseauxsociaux','twitter.png'])}}" alt="twitter"><!--
            --><img class="i33" src="{{url('assets',['images','crowboostart','page_home','reseauxsociaux','facebook.png'])}}" alt="facebook">
        </div>
    </div><!--
    --><div class="w35 vtop">
        <div class="c3">
            <h3 class="titlecontact title35">La Newsletter Crowdboostart <span class="span">Restez connecté à la communauté</span></h3>
            <form class="navbar-form mail_newsletter" action="#" method="post">
                {{csrf_field()}}
                <div class="form-group w100">
                    <input type="email" class="form-control w70" placeholder="VOTRE E-MAIL"><!--
                    --><button type="submit" class="btn btn-default envoi">Envoi</button>
                </div>
            </form>
        </div>
    </div>
    </div>
@endsection
