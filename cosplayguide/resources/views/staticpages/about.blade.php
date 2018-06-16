@extends('master')

@section('title')
  <title>Over Coplay</title>
@endsection


@section('content')

<!-- About cosplay -->
<div class="about">


  <div class="row header">

    <div class="col-3">
      <p>Een cosplay maken is geen simpele opdracht. En hoewel elke cosplay uniek is in zijn creatie, begeleiden we je bij elke stap. <span>En hoewel elke cosplay uniek is in zijn creatie, begeleiden we je bij elke stap.</span></p>
    </div>

    <div class="col-5">
      <div class="header-tekst tips">

        <div class="titel">
          <h1 class="large purple">THE COSPLAY LIFE</h1>
          <div class="titels-underline medium purple"></div>
        </div>

        <img src="/img/about.png" alt="profiel persoon in cosplay, zonder cosplay">

      </div>
    </div>

    <div class="col-3">
      <a class="button-yellow" href="#">
        <div class="buttons-linethrough"></div>
        <p>LEER HOE</p>
      </a>
    </div>


  </div><!-- einde header -->


  <div class="worbla">

    <div class="row meer-info meer-info-target">
      <div class="col-6 tekst">

        <div class="titel">
          <h2 class="large oversize">WHAT DO I NEED?</h2>
          <div class="titels-underline medium"></div>
        </div>

        <p class="dark">Worbla en foam zijn 2 van de meest gebruikte materialen bij cosplay. Daarnaast zijn ze relatief beginner friendly en tillen ze je cosplay meteen naar en hoger niveau. In onze blog geven je alvast een idee van wat Worbla is en hoe je het
  gebruikt.</p>

        <a class="button-yellow" href="#">
          <div class="buttons-linethrough"></div>
          <p>WAT HIERNA?</p>
        </a>

        <p class="nummer first">1</p>

      </div>


      <div class="col-6">
        <img class="large" src="/img/worbla-wapen-geel-rechts.png" alt="Worbla">
      </div>
    </div>



    <div class="row meer-info">

      <div class="col-6">
        <img class="large" src="/img/worbla-wapen-geel-links.png" alt="Worbla">
      </div>

      <div class="col-6 tekst">

        <div class="titel">
          <h2 class="large oversize">WHERE DO I GO?</h2>
          <div class="titels-underline medium"></div>
        </div>

        <p class="dark">Worbla en foam zijn 2 van de meest gebruikte materialen bij cosplay. Daarnaast zijn ze relatief beginner friendly en tillen ze je cosplay meteen naar en hoger niveau. In onze blog geven je alvast een idee van wat Worbla is en hoe je het
    gebruikt.</p>

        <a class="button-yellow right" href="#">
          <div class="buttons-linethrough"></div>
          <p>WAT HIERNA?</p>
        </a>

        <p class="nummer second">2</p>

      </div>
    </div>



    <div class="row meer-info">
      <div class="col-6 tekst">

        <div class="titel">
          <h2 class="large oversize">HOW DO I MAKE IT?</h2>
          <div class="titels-underline medium"></div>
        </div>

        <p class="dark">Worbla en foam zijn 2 van de meest gebruikte materialen bij cosplay. Daarnaast zijn ze relatief beginner friendly en tillen ze je cosplay meteen naar en hoger niveau. In onze blog geven je alvast een idee van wat Worbla is en hoe je het
  gebruikt.</p>

        <div class="join-knop">
          <a href="/register">START JOUW COSPLAY</a>
          <a href="/register"><img src="/img/join-knop.png" alt="Knop met plus teken"></a>
        </div>

        <p class="nummer third">3</p>

      </div>


      <div class="col-6">
        <img class="large" src="/img/worbla-wapen-geel-rechts.png" alt="Worbla">
      </div>
    </div>

  </div>


</div>

@endsection


@section('footer-image')
  class="footer-background"
@endsection
