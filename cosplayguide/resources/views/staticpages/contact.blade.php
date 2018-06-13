@extends('master')


@section('content')


    <div class="row">

      <div class="col-6 contact-form">

          <div class="titel contact">
            <h1 class="large purple">Feel a little lost?</h1>
            <div class="titels-underline small purple"></div>
          </div>


        <div class="form contact">


          <form method="POST" action="{{ route('login') }}">
              @csrf


              <div class="form-group contact row">
                  <label for="username" class="col-form-label text-md-right">
                    <img src="/img/iconen/username.svg" alt="Gebruikersnaam icoon">
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


              <div class="form-group contact row">
                  <label for="email" class="col-form-label text-md-right">
                    <img src="/img/iconen/mail.svg" alt="mail icoon">
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



              <div class="form-group contact row">
                  <label for="message" class="col-form-label text-md-right">
                    <img src="/img/iconen/message.svg" alt="bericht icoon">
                  </label>

                  <div>
                      <input id="message" type="text" class="form-control" name="message" placeholder="Jouw bericht" required autofocus>
                  </div>
              </div>


              <div class="form-group mb-0">

                  <div class="clearfix">
                    <button type="submit" class="button-yellow float-right">
                      <img class="arrow right" src="/img/iconen/kort-pijltje-rechts-wit.png" alt="wit pijltje rechts">
                      <p class="right">VERSTUUR</p>
                    </button>
                  </div>

              </div>

          </form>
        </div>
      </div>

      <div class="col-6 astronaut">
        <img src="/img/astronaut.png" alt="Astronaut in de ruimte">
      </div>


    </div>

@endsection
