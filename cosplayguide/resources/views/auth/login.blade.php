@extends('master')


@section('title')
  <title>Login to Cosplayguide</title>
@endsection


@section('content')
<div class="container">
    <div class="row justify-content-center login">

          <div class="col-5">
            <img class="img-fluid" src="/img/gear-up.jpg" alt="captain america outfit">
          </div>

          <div class="col-7">

                <div class="form-login">

                  <div class="titel">
                    <h1 class="large light">GEAR UP</h1>
                    <div class="titels-underline small light"></div>
                  </div>


                  <form method="POST" action="{{ route('login') }}">
                      @csrf

                      <div class="form-group row">
                          <label for="email" class="col-form-label text-md-right">
                            <img src="/img/iconen/mail-light.svg" alt="mail icoon">
                          </label>

                          <div>
                              <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Jouw emailadres" required autofocus>

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
                              <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Jouw wachtwoord" required>

                              @if ($errors->has('password'))
                                  <span class="invalid-feedback">
                                      <strong>{{ $errors->first('password') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>


                      <div class="form-group mb-0">

                              <div class="clearfix">
                                <button type="submit" class="button-yellow float-right">
                                  <img class="arrow right" src="/img/iconen/kort-pijltje-rechts-wit.png" alt="wit pijltje rechts">
                                  <p class="right">LOG IN</p>
                                </button>
                              </div>

                              <div class="login-extra">
                                <a class="login-link" href="{{ route('password.request') }}"><span>Wachtwoord vergeten?</span></a>
                                <a class="login-link" href="{{ route('register') }}">Nog geen account? <span>Registreer hier</span></a>
                              </div>
                          </div>

                  </form>

                </div>


          </div>

    </div>
</div>
@endsection
