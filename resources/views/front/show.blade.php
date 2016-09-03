@extends('layout.master')
@section('content')
    <div class="container2">
        <div class="w73 vtop">
            <div class="bgcwhite">
                <div class="p10">
                    <h2 class="title_event">{{$event->title}}</h2>
                    <p class="text_event">Pièce chorégraphique de 35' pour 5 danseus</p>
                    <p class="title_creator">Créateur: <b class="color_creator">{{$event->user->username}}</b></p>
                </div>
                <div>
                    <ul class="menu_event">
                        <li class="menu_active"><a href="#"><img src="{{url('assets',['images','crowboostart','ppp','onglets','picto-projet.png'])}}" alt="projets">Projet</a></li><!--
                        --><li><a href="#"><img src="{{url('assets',['images','crowboostart','ppp','onglets','picto-news.png'])}}" alt="news"> {{rand(2,15)}} News</a></li><!--
                        --><li><a href="#"><img src="{{url('assets',['images','crowboostart','ppp','onglets','picto-commentaires.png'])}}" alt="commantaires">{{rand(2,9)}} Commentaires</a></li><!--
                        --><li><a href="#"><img src="{{url('assets',['images','crowboostart','ppp','onglets','picto-booster.png'])}}" alt="boosters">{{rand(50,500)}} Booster</a></li>
                    </ul>
                    <img class="center" src="{{url('assets',['images',$event->image])}}" alt="event_image">
                </div>
            </div>
        </div><!--
        --><div class="w27 vtop">
            @if(Auth::user())
                <div class="p_aside">
                    <div class="bgcwhite shadow p10_aside">
                        <img src="{{url('assets',['images','crowboostart','page_annonces','annonces','picto-recherche-par-competence.png'])}}" alt="recherche-competences">
                        <h3 class="title_aside">Vos projets</h3>
                        <ul class="list_aside">
                            <li><a href="#">-Projet 1- <b class=""> Chambre 432 </b></a></li>
                            <li><a href="#">-Projet 2- <b class=""> Arte Flamenco</b></a></li>
                            <li><a href="#">-Projet 3- <b class=""> Akitos Rochett </b></a></li>
                        </ul>
                    </div>
                </div>
                <div class="p10_aside shadow">
                    <img class="img_aside" src="{{url('assets',['images','crowboostart','ppp-logue','aside','who.jpg'])}}" alt="who">
                </div>
                <div class="p_aside">
                    <div class="bgcwhite shadow">
                        <img src="{{url('assets',['images','crowboostart','ppp','aside','picto-news.png'])}}" alt="news">
                        <h3 class="title_aside p10_aside">Conseils et Formation</h3>
                        <p class="text_boost">Beneficiez de conseils pour booster votre projet</p>
                        <ul class="post_all">
                            <li><a href="#">CONSEILS</a></li><!--
                            --><li><a href="#">FORMATION</a></li>
                        </ul>
                    </div>
                </div>
                <div class="p_aside">
                    <div class="bgcwhite shadow p10_aside">
                        <input class="crowd" type="button" value="LANCER">
                        <p class="text_boost">Passer en projet financé <b class="title_boost">par crowdfounding</b></p>
                    </div>
                </div>
                <div class="p_aside">
                    <div class="bgcwhite shadow">
                        <img src="{{url('assets',['images','crowboostart','ppp','aside','picto-annonces.png'])}}" alt="annonces">
                        <h3 class="title_aside p10_aside">Annonces autour du projet</h3>
                        <img class="img_aside" src="{{url('assets',['images','crowboostart','ppp','aside','annonces.jpg'])}}" alt="annonces">
                    </div>
                </div>
            @else
                <div class="p_aside">
                    <div class="bgcwhite shadow p10_aside">
                        <input class="booster" type="button" value="BOOSTER">
                        <p class="text_boost">Faire partie des Boosters de "<b class="title_boost">{{$event->title}}</b>"</p>
                    </div>
                </div>
                <div class="p_aside">
                    <div class="bgcwhite shadow">
                        <img src="{{url('assets',['images','crowboostart','ppp','aside','picto-annonces.png'])}}" alt="annonces">
                        <h3 class="title_aside p10_aside">Annonces autour du projet</h3>
                        <img class="img_aside" src="{{url('assets',['images','crowboostart','ppp','aside','annonces.jpg'])}}" alt="annonces">
                        <ul class="post_all">
                            <li><a href="#">POSTER</a></li><!--
                            --><li><a href="#">VOIR TOUT</a></li>
                        </ul>
                    </div>
                </div>
                <div class="p_aside">
                    <div class="bgcwhite shadow">
                        <img src="{{url('assets',['images','crowboostart','ppp','aside','picto-news.png'])}}" alt="news">
                        <h3 class="title_aside p10_aside">News de la communauté</h3>
                        <img class="img_aside" src="{{url('assets',['images','crowboostart','ppp','aside','news.jpg'])}}" alt="annonces">
                        <ul class="post_all">
                            <li><a href="#">POSTER</a></li><!--
                            --><li><a href="#">VOIR TOUT</a></li>
                        </ul>
                    </div>
                </div>
                <div class="p_aside">
                    <div class="c2">
                        <h3 class="reseaux_aside p10_aside">Suivre Tishou <span class="span">Restez connectés</span></h3>
                        <img class="w33" src="{{url('assets',['images','crowboostart','page_home','reseauxsociaux','instagram.png'])}}" alt="instagram"><!--
                        --><img class="w33" src="{{url('assets',['images','crowboostart','page_home','reseauxsociaux','twitter.png'])}}" alt="twitter"><!--
                        --><img class="w33" src="{{url('assets',['images','crowboostart','page_home','reseauxsociaux','facebook.png'])}}" alt="facebook">
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection

