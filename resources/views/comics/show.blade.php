@extends('layouts.app');

@section('metaTag', 'Collecion - DC Comics')


@section('content')
    <section class="comic_details">

        <div class="comic_container">
            
            <h1>
                {{ $comic['series'] }}
            </h1>
            <figure class="thumb">
                <img src="{{$comic['thumb']}}" alt="">
            </figure>
            <p>
                {{$comic['description']}}
            </p>
        </div>

    </section>


@endsection

