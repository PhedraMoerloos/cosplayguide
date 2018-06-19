@extends('master')



@section('title')
  <title>Contacteer Cosplay Guide</title>
@endsection


@section('description')
  <meta name="description" content="Voel je je wat verdwaald in de cosplaywereld? Heb je vragen die te maken hebben met cosplay? Stel ze gerust en we beantwoorden ze zo snel en accuraat mogelijk.">
@endsection


@section('follow')
  <meta name="robots" content="index, follow">
@endsection



@section('content')


    <div class="row contact">

      <div class="col-6 contact-form">

          <div class="titel contact">
            <h1 class="large purple">Feel a little lost?</h1>
            <div class="titels-underline small purple"></div>
          </div>


        <div class="form contact">


          <form method="POST" action="{{ route('send_mail') }}">

              @csrf

              @if (session('sent'))
                <div class="alert alert-success">
                  Je bericht is verstuurd!
                </div>

              @else

              <div class="form-group contact row">
                  <label for="username" class="col-form-label text-md-right">
                    <img src="/img/iconen/username.svg" alt="Gebruikersnaam icoon">
                  </label>

                  <div>

                      <input id="username" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ Auth::check() ? (Auth::user()->username) : old('username') }}" placeholder="Jouw naam" required autofocus>

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
                      <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ Auth::check() ? (Auth::user()->email) : old('email') }}" placeholder="Jouw emailadres" required>

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
                      <input id="message" type="text" class="form-control" name="message" placeholder="Jouw bericht" required>
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



              @endif


          </form>
        </div>
      </div>

      <div class="col-6 astronaut">
        <img src="/img/astronaut.png" alt="Astronaut in de ruimte">
      </div>


    </div>

@endsection


@section('footer-image')
  class="footer-background-earth"
@endsection
