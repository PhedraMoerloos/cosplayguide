@extends('master')


@section('title')
  <title>Kies je pruik</title>
@endsection

@section('content')

<div class="onderdeel pruik">


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



    <div class="row meer-info meer-info-target">
      <div class="col-6">

        <div class="titel">
          <h2 class="large">LACEFRONT</h2>
          <div class="titels-underline medium"></div>
        </div>

        <p>Worbla en foam zijn 2 van de meest gebruikte materialen bij cosplay. Daarnaast zijn ze relatief beginner friendly en tillen ze je cosplay meteen naar en hoger niveau. In onze blog geven je alvast een idee van wat Worbla is en hoe je het
  gebruikt.</p>

      </div>


      <div class="col-6">
        <img src="/img/lacefront.png" alt="Lacefront pruik">
      </div>
    </div>



    <div class="row meer-info">

      <div class="col-6">
        <img class="large" src="/img/kleurrange.png" alt="Kleurrange bij pruiken">
      </div>

      <div class="col-6">

        <div class="titel">
          <h2 class="large">KLEURRANGE</h2>
          <div class="titels-underline medium"></div>
        </div>

        <p>Worbla en foam zijn 2 van de meest gebruikte materialen bij cosplay. Daarnaast zijn ze relatief beginner friendly en tillen ze je cosplay meteen naar en hoger niveau. In onze blog geven je alvast een idee van wat Worbla is en hoe je het
    gebruikt.</p>

      </div>
    </div>



    <div class="row meer-info">
      <div class="col-6">

        <div class="titel">
          <h2 class="large oversize">HITTEBESTENDIG</h2>
          <div class="titels-underline medium"></div>
        </div>

        <p>Worbla en foam zijn 2 van de meest gebruikte materialen bij cosplay. Daarnaast zijn ze relatief beginner friendly en tillen ze je cosplay meteen naar en hoger niveau. In onze blog geven je alvast een idee van wat Worbla is en hoe je het
  gebruikt.</p>

      </div>


      <div class="col-6">
        <img src="/img/hittebestendigheid.png" alt="Stijltang">
      </div>
    </div>

</div>


@endsection


@section('footer-image')
  class="footer-background"
@endsection
