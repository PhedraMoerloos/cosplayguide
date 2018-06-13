@extends('master')


@section('content')

<div class="pruik">


  <div class="row header">
    <img id="header-achtergrond-pruik" src="/img/pruik-achtergrond.jpg" alt="Cosplay met pruik">
    <div class="header-tekst">

      <div class="titel">
        <h1 class="large light">PRUIK</h1>
        <div class="titels-underline small light"></div>
      </div>

      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu fermentum elit. Suspendisse purus enim, tristique eget aliquet eget, luctus</p>
      <p>amet, ullamcorper scelerisque nunc. Curabitur ullamcorper sem non arcu suscipit cursus corper sem non</p>

      <a class="button-yellow button-meer-info" href="#">
        <div class="buttons-linethrough"></div>
        <p>ONTDEK MEER</p>
      </a>

      <p class="link-cosplayer">Bekijk meer van <a class="link" href="#">Narga Lifestream</a></p>

    </div>
  </div>

  <div class="row lacefront meer-info">
    <h2>LACEFRONT</h2>
  </div>

</div>


@endsection


@section('footer-image')
  class="footer-background"
@endsection
