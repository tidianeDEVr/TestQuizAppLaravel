@extends('base')

@section('title', config('app.name').' | Dashboard')

@section('content')
    dashboard
    @if (Auth::check())
        I'm connected
    @else
        i'm not    
    @endif
@endsection