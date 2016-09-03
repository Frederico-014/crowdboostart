@extends('layout.master')
@section('content')
    <div class="container">
    <div>
        <div class="w73 vtop">
            <div class="bgcwhite shadow">
                <div class="w20 vtop" >
                    <img src="{{url('assets',['images','crowboostart','page_annonces','annonces','picto-annonces.png'])}}" alt="picto-annonces">
                </div><!--
                --><div class="w80 vtop">
                    <h2 class="title_annonces">Les annonces de la communauté</h2>
                    <p class="subtitle_annonces">Entrer dans la comunauté active et solidaire du spectacle vivant, échanger et partager sur les projet que vous soutenez</p>
                </div>
            </div>
            <br>
            <p><a href="#"><img class= "pg_annonces" src="{{url('assets',['images','crowboostart','page_annonces','annonces','Damier-annonces.jpg'])}}" alt="damier-annonces"></a></p>
            <p><a href="#"><img class="pg_annonces" src="{{url('assets',['images','crowboostart','page_annonces','annonces','Pages.jpg'])}}" alt="pagination"></a></p>
        </div><!--
        --><div class="w27 vtop">
            <div class="p_aside shadow">
                <div class="bgcwhite shadow">
                    <img src="{{url('assets',['images','crowboostart','page_annonces','annonces','picto-recherche-annonces.png'])}}" alt="recherche-annonces">
                    <h3 class="title_aside">Annonces</h3>
                    <ul class="list_aside">
                        <li>
                            <form action="#" method="get">
                                <div id="custom-search-input">
                                    <div class="input-group col-md-12">
                                        <input type="text" class="form-control search_annonces" placeholder="Rechercher par projet" />
                                        <span class="input-group-btn">
                                             <button class="btn btn-info" type="button">
                                                <i class="glyphicon glyphicon-search"></i>
                                            </button>
                                        </span>
                                    </div>
                                </div>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="p_aside">
                <div class="bgcwhite shadow">
                    <img src="{{url('assets',['images','crowboostart','page_annonces','annonces','picto-recherche-par-competence.png'])}}" alt="recherche-competences">
                    <h3 class="title_aside">Recherhe par competence</h3>
                    <ul class="list_aside">
                        <li><a href="#">Communication</a></li>
                        <li><a href="#">Administratif</a></li>
                        <li><a href="#">Spectacle</a></li>
                        <li><a href="#">Prêt de matérie</a>l</li>
                    </ul>
                </div>
            </div>
            <div class="p_aside">
                <div class="bgcwhite shadow">
                    <img src="{{url('assets',['images','crowboostart','page_annonces','annonces','picto-recherche-par-domaine-artistique.png'])}}" alt="recherche-domaine">
                    <h3 class="title_aside">Recherhe par Domaines</h3>
                    <ul class="list_aside">
                        @forelse($categories as $id=>$name)
                            <li><a href="#">{{$name}}</a></li>
                        @empty
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <h2 class="project_annonces">Et des projets à booster</h2>
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
    </div>
@endsection