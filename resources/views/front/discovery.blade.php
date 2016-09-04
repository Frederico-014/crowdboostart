@extends('layout.master')
@section('content')
    <div class="container">
        <nav>
        <ul class="nav nav-tabs">
            @forelse($categories as $id=>$name)
            <li id="w20" role="presentation"{!! Request::url() == url('discovery/category',$id)? 'class="active"' : '' !!}><a href="{{url('discovery/category',$id)}}">{{$name}}</a></li>
            @empty
            @endforelse
            </ul>
        </nav>
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
        <div>
            {!!$events->render()!!}
        </div>
    </div>
@endsection