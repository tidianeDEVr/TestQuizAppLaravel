@extends('base')

@section('title', config('app.name').' | Quizz')

@section('content')
        <div class="container">
        <div class="row justify-content-center">
                <div class="col-md-8">
                <div class="card my-5">
                    <div class="card">
                        <div class="card-header">
                          Repondez a ce questionnaire
                        </div>
                        <div class="card-body">
                            <form class=" bg-white px-4 needs-validation" method="POST" novalidate>
                                @csrf  
                                @method('POST')
                                <p class="fw-bold">1. Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                                <div class="form-check mb-2">
                                  <input class="form-check-input" type="radio" name="first-option" id="first-option-1" required value='1'/>
                                  <label class="form-check-label" for="first-option-1">
                                    Option 1
                                  </label>
                                </div>
                                <div class="form-check mb-2">
                                  <input class="form-check-input" type="radio" name="first-option" id="first-option-2" required value="2"/>
                                  <label class="form-check-label" for="first-option-2">
                                    Option 2
                                  </label>
                                </div>
                                <p class="fw-bold">2. Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                                <div class="form-check mb-2">
                                  <input class="form-check-input" type="radio" name="second-option" id="second-option-1" required value='1'/>
                                  <label class="form-check-label" for="second-option-1">
                                    Option 1
                                  </label>
                                </div>
                                <div class="form-check mb-2">
                                  <input class="form-check-input" type="radio" name="second-option" id="second-option-2" required value="2"/>
                                  <label class="form-check-label" for="second-option-2">
                                    Option 2
                                  </label>
                                </div>
                                <div class="form-check mb-2">
                                  <input class="form-check-input" type="radio" name="second-option" id="second-option-3" required value="3"/>
                                  <label class="form-check-label" for="second-option-3">
                                    Option 3
                                  </label>
                                </div>
                                <p class="fw-bold">3. Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                                <div class="form-check mb-2">
                                  <input class="form-check-input" type="radio" name="third-option" id="third-option-1" required value='1'/>
                                  <label class="form-check-label" for="third-option-1">
                                    Option 1
                                  </label>
                                </div>
                                <div class="form-check mb-2">
                                  <input class="form-check-input" type="radio" name="third-option" id="second-option-2" required value="2"/>
                                  <label class="form-check-label" for="second-option-2">
                                    Option 2
                                  </label>
                                </div>
                                <p class="fw-bold">4. Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                                <div class="form-check mb-2">
                                  <input class="form-check-input" type="radio" name="fourth-option" id="fourth-option-1" required value='1'/>
                                  <label class="form-check-label" for="fourth-option-1">
                                    Option 1
                                  </label>
                                </div>
                                <div class="form-check mb-2">
                                  <input class="form-check-input" type="radio" name="fourth-option" id="fourth-option-2" required value="2"/>
                                  <label class="form-check-label" for="fourth-option-2">
                                    Option 2
                                  </label>
                                </div>
                                <div class="form-check mb-2">
                                  <input class="form-check-input" type="radio" name="fourth-option" id="fourth-option-3" required value="3"/>
                                  <label class="form-check-label" for="fourth-option-3">
                                    Option 3
                                  </label>
                                </div>
                                <p class="fw-bold">5. Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                                <div class="form-check mb-2">
                                  <input class="form-check-input" type="radio" name="fifth-option" id="fifth-option-1" required value='1'/>
                                  <label class="form-check-label" for="fifth-option-1">
                                    Option 1
                                  </label>
                                </div>
                                <div class="form-check mb-2">
                                  <input class="form-check-input" type="radio" name="fifth-option" id="fifth-option-2" required value="2"/>
                                  <label class="form-check-label" for="fifth-option-2">
                                    Option 2
                                  </label>
                                </div>
                                <p class="fw-bold">6. Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                                <div class="form-check mb-2">
                                  <input class="form-check-input" type="radio" name="sixth-option" id="sixth-option-1" required value='1'/>
                                  <label class="form-check-label" for="sixth-option-1">
                                    Option 1
                                  </label>
                                </div>
                                <div class="form-check mb-2">
                                  <input class="form-check-input" type="radio" name="sixth-option" id="sixth-option-2" required value="2"/>
                                  <label class="form-check-label" for="sixth-option-2">
                                    Option 2
                                  </label>
                                </div>
                                <div class="form-check mb-2">
                                  <input class="form-check-input" type="radio" name="sixth-option" id="sixth-option-3" required value="3"/>
                                  <label class="form-check-label" for="sixth-option-3">
                                    Option 3
                                  </label>
                                </div>
                                <p class="fw-bold">7. Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                                <div class="form-check mb-2">
                                  <input class="form-check-input" type="radio" name="seventh-option" id="seventh-option-1" required value='1'/>
                                  <label class="form-check-label" for="seventh-option-1">
                                    Option 1
                                  </label>
                                </div>
                                <div class="form-check mb-2">
                                  <input class="form-check-input" type="radio" name="seventh-option" id="seventh-option-2" required value="2"/>
                                  <label class="form-check-label" for="seventh-option-2">
                                    Option 2
                                  </label>
                                </div>
                                <p class="fw-bold">8. Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                                <div class="form-check mb-2">
                                  <input class="form-check-input" type="radio" name="eighth-option" id="eighth-option-1" required value='1'/>
                                  <label class="form-check-label" for="eighth-option-1">
                                    Option 1
                                  </label>
                                </div>
                                <div class="form-check mb-2">
                                  <input class="form-check-input" type="radio" name="eighth-option" id="eighth-option-2" required value="2"/>
                                  <label class="form-check-label" for="eighth-option-2">
                                    Option 2
                                  </label>
                                </div>
                                <div class="form-check mb-2">
                                  <input class="form-check-input" type="radio" name="eighth-option" id="eighth-option-3" required value="3"/>
                                  <label class="form-check-label" for="eighth-option-3">
                                    Option 3
                                  </label>
                                </div>
                                <p class="fw-bold">9. Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                                <div class="form-check mb-2">
                                  <input class="form-check-input" type="radio" name="nineth-option" id="nineth-option-1" required value='1'/>
                                  <label class="form-check-label" for="nineth-option-1">
                                    Option 1
                                  </label>
                                </div>
                                <div class="form-check mb-2">
                                  <input class="form-check-input" type="radio" name="nineth-option" id="nineth-option-2" required value="2"/>
                                  <label class="form-check-label" for="nineth-option-2">
                                    Option 2
                                  </label>
                                </div>
                                <p class="fw-bold">10. Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                                <div class="form-check mb-2">
                                  <input class="form-check-input" type="radio" name="tenth-option" id="tenth-option-1" required value='1'/>
                                  <label class="form-check-label" for="tenth-option-1">
                                    Option 1
                                  </label>
                                </div>
                                <div class="form-check mb-2">
                                  <input class="form-check-input" type="radio" name="tenth-option" id="tenth-option-2" required value="2"/>
                                  <label class="form-check-label" for="tenth-option-2">
                                    Option 2
                                  </label>
                                </div>
                                <div class="form-check mb-2">
                                  <input class="form-check-input" type="radio" name="tenth-option" id="tenth-option-3" required value="3"/>
                                  <label class="form-check-label" for="tenth-option-3">
                                    Option 3
                                  </label>
                                </div>
                                <div class="mt-5">
                                    <button class="btn btn-dark float-right">Soumettre</button>
                                </div>
                              </form>
                        </div>
                </div>
                </div>
        </div>
    </div>
@endsection