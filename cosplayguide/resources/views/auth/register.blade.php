@extends('master')


@section('title')
  <title>Registreer bij Cosplayguide</title>
@endsection


@section('content')
<div class="container">
    <div class="row justify-content-center login">

          <div class="col-5">
            <img class="img-fluid" src="/img/gear-up.jpg" alt="captain america outfit">
          </div>

          <div class="col-7">

            <div class="background-login"></div>

                <div class="form-login">

                  <div class="titel register">
                    <h1 class="large light">GEAR UP</h1>
                    <div class="titels-underline small light"></div>
                  </div>


                  <form method="POST" action="{{ route('register') }}">
                      @csrf


                      <div class="form-group row">
                          <label for="username" class="col-form-label text-md-right">
                            <img src="/img/iconen/username-light.svg" alt="Gebruikersnaam icoon">
                          </label>

                          <div>
                              <input id="username" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" placeholder="Jouw gebruikersnaam" required autofocus>

                              @if ($errors->has('username'))
                                  <span class="invalid-feedback">
                                      <strong>{{ $errors->first('username') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>


                      <div class="form-group row">
                          <label for="email" class="col-form-label text-md-right">
                            <img src="/img/iconen/mail-light.svg" alt="mail icoon">
                          </label>

                          <div>
                              <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Jouw email mailadres" required>

                              @if ($errors->has('email'))
                                  <span class="invalid-feedback">
                                      <strong>{{ $errors->first('email') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>


                      <div class="form-group row">
                        <label for="password" class="col-form-label text-md-right">
                          <img src="/img/iconen/password-light.svg" alt="mail icoon">
                        </label>

                          <div>
                              <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Jouw paswoord" required>

                              @if ($errors->has('password'))
                                  <span class="invalid-feedback">
                                      <strong>{{ $errors->first('password') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>


                      <div class="form-group row">
                        <label for="password-confirm" class="col-form-label text-md-right">
                          <img src="/img/iconen/password-light.svg" alt="mail icoon">
                        </label>

                        <div>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Bevestig je paswoord" required>
                        </div>
                      </div>


                      <div class="form-group mb-0 register">

                        <div class="clearfix">
                          <button type="submit" class="button-yellow float-right">
                            <img class="arrow right" src="/img/iconen/kort-pijltje-rechts-wit.png" alt="wit pijltje rechts">
                            <p class="right">REGISTREER</p>
                          </button>
                        </div>

                      </div>

                  </form>

                </div>


          </div>

    </div>
</div>
@endsection
