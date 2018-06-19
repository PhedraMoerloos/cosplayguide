@extends('master')



@section('title')
  <title>Cosplayplanner</title>
@endsection


@section('description')
  <meta name="description" content="We tonen je het nut van een Cosplayplanner als jouw assistent. Je cosplay maken is namelijk leuk maar zonder goede voorbereiding zal je met veel hindernissen en ergernissen te maken krijgen.">
@endsection


@section('follow')
  <meta name="robots" content="index, follow">
@endsection



@section('content')



      <div class="onderdeel worbla">


          <div class="row header">

            <div class="col-4">
              <div class="header-tekst tips">

                <div class="titel">
                  <h1 class="large purple">COSPLAY PLANNER</h1>
                  <div class="titels-underline medium purple"></div>
                </div>

                <p class="dark">Hoe graag je ook gewoon meteen wilt beginnen aan je cosplay kostuum, moet je eerst een stapje achteruit doen en je cosplay plannen. Hier is hoe.</p>

                <a class="button-yellow button-meer-info" href="#">
                  <div class="buttons-linethrough"></div>
                  <p>ONTDEK</p>
                </a>
              </div>
            </div>

            <div class="col-8">
              <iframe src="https://www.youtube.com/embed/0IjT0JZJA9k" allowfullscreen></iframe>
            </div>


          </div><!-- einde header -->



          <div class="row meer-info meer-info-target">
            <div class="col-6 tekst">

              <div class="titel">
                <h2 class="large oversize">BUDGET</h2>
                <div class="titels-underline medium"></div>
              </div>

              <p class="dark">Steeds je totale budget in het oog houden en een ruwe schatting maken van de kost van alle onderdelen zijn onmisbaar bij het maken van een cosplay. Een cosplay niet kunnen aanmaken door gebrek aan budget is namelijk steeds een jammere zaak.</p>

              <p class="nummer first">1</p>

            </div>


            <div class="col-6">
              <img class="large" src="/img/cosplayplanner.png" alt="Gsm met de cosplanner app overzicht onderdelen">
            </div>
          </div>



          <div class="row meer-info">

            <div class="col-6">
              <img class="large" src="/img/cosplayplanner-deadline.png" alt="Gsm met de cosplanner app deadline">
            </div>

            <div class="col-6 tekst">

              <div class="titel">
                <h2 class="large oversize">THE DEADLINE</h2>
                <div class="titels-underline medium"></div>
              </div>

              <p class="dark">Hoe vaak je in de cosplaywereld hoort dat mensen hun cosplay op pas af hebben de nacht voor de conventie is ongelofelijk. Half afgewerkte cosplays die vaak teleurstellend zijn voor zowel maker als toeschouwer. Via de cosplanner verlies je nooit je deadline uit het oog.</p>

              <p class="nummer second">2</p>

              <div class="join-knop">
                <a href="https://play.google.com/store/apps/details?id=com.catokusanagi.apps.android.cosplanner&hl=nl" target="_blank">DOWNLOAD DE APP</a>
              </div>

            </div>
          </div>

      </div>


@endsection


@section('footer-image')
  class="footer-background"
@endsection
