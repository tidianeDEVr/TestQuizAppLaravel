@extends('base')

@section('title', config('app.name').' | Dashboard')

@section('content')
        <div class="container">
        <div class="row justify-content-center">
                <div class="col-md-8">
                <div class="card my-5">
                    <div class="card">
                        <div class="card-header">
                          Bienvenue
                        </div>
                        <div class="card-body">
                                <h5 class="card-title">Ceci est une petite application de quizz</h5>
                                <p>
                                        Authentifiez-vous pour pouvoir repondre et enregistrer vos reponses. Si toutefois vous n'avez pas de compte vous pouvez en creer un ☺<br>
                                </p>
                                
                                <div class="container text-center my-5">
                                        @if($user->isAdmin && Auth::check())
                                                <a class="btn btn-outline-danger" href="{{ route('dashboard') }}"><i class="bi bi-speedometer"></i> Dashboard </a>
                                        @else
                                        <p>
                                                Pour acceder au dashboard mettez la valeur de 'isAdmin' sur votre bd a <span class="badge text-bg-danger">TRUE</span><br>
                                                Le bouton pour y acceder apparaitra ici 
                                        </p>
                                        @endif
                                </div>
                        </div>
                </div>
                </div>
        </div>
    </div>
@endsection