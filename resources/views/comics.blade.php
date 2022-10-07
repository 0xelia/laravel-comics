@extends('layouts.app')

@section('metaTag', 'Home - DC Comics')


@section('content')
    
    @include('partials.jumbo')
    @include('partials.comics-grid')

@endsection