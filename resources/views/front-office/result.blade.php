@extends('base')

@section('title', config('app.name').' | Resultat')

@section('content')
        <div class="container">
        <div class="row justify-content-center">
                <div class="col-md-8">
                <div class="card my-5">
                    <div class="card">
                        <div class="card-header">
                          Resultat
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-center">Merci d'avoir repondu aux questions</h5>
                            <div class="container text-center mt-5">
                                   <h3> Vous avez un score de {{ $score }} / 10</h3>
                            </div>
                        </div>
                        <p class="text-center">Partager sur les reseaux sociaux</p>
                        <div class="container mb-5 d-flex w-100 justify-center">
                            <div class="mx-auto">
                            @foreach ($socialShare as $key=>$value)
                                <a href="{{$value}}" class="btn btn-sm btn-dark text-uppercase">{{$key}}</a>
                            @endforeach
                            </div>
                        </div>
                </div>
                </div>
        </div>
    </div>
@endsection