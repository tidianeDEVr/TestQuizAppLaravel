@extends('base')

@section('title', config('app.name').' | Resultat')

@section('content')
        <div class="container">
        <div class="row justify-content-center">
                <div class="col-md-8">
                <div class="card my-5">
                    <div class="card">
                        <div class="card-header">
                          Dashboard
                        </div>
                        <div class="card-body">
                            <div class="row row-cols-2 gx-3 text-center">
                                <div class="col p-3">
                                    <div class="bg-primary py-3" style="color: #fff;border-radius:7px">
                                        <span><i class="bi bi-door-open-fill"></i> Nombre inscriptions <br>
                                            <h3 class="text-bold">{{ count($users) }}</h3>
                                        </span>
                                    </div>
                                </div>
                                <div class="col p-3">
                                    <div class="bg-success py-3" style="color: #fff;border-radius:7px">
                                        <span><i class="bi bi-ui-checks"></i> Nombre de reponses <br> 
                                            <h3 class="text-bold">{{ count($responses) }}</h3>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <h4 class="my-3">Reponses et scores</h4>
                            <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Prenom et nom</th>
                                    <th scope="col">Score</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    @foreach ($responses as $response)
                                    <tr>
                                        <th scope="row">{{$response->id}}</th>
                                        <td>{{$response->user}}</td>
                                        <td>{{$response->score}} / 10</td>
                                      </tr>
                                    @endforeach
                                </tbody>
                              </table>
                        </div>
                        
                </div>
                </div>
        </div>
    </div>
@endsection