@extends('layouts.app')

@section('metaTag', 'Home - DC Comics')


@section('content')
    
    @include('partials.jumbo')
    @include('comics.index')

@endsection