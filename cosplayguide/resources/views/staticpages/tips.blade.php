@extends('master')


@section('title')
  <title>Tips & Tricks van Cosplay Guide</title>
@endsection


@section('content')


  <div class="tips-overzicht">


    <div class="row">
      <div class="col-6">

        <div class="titel">
          <h1 class="large purple">Tips & Tricks</h1>
          <div class="titels-underline medium purple"></div>
        </div>

        <img class="worbla-img-breastplate" src="/img/tip-worbla2.jpg" alt="Borstplaat in Worbla">

      </div>

      <div class="col-6">

        <img class="worbla-img-daedrik" src="/img/tip-worbla.jpg" alt="Volledige cosplay in Worbla">

        <div>
          <a class="button-yellow worbla-tip" href="/tips-en-tricks/worbla-en-foam">
            <div class="buttons-linethrough"></div>
            <p>WORBLA & FOAM</p>
          </a>
        </div>

      </div>
    </div>




    <div class="row">

      <div class="col-5 beginner-tips">

        <a class="button-yellow" href="/tips-en-tricks/10-beginner-tips">
          <p>10 BEGINNER TIPS</p>
          <div class="buttons-linethrough right"></div>
        </a>

        <img class="scissors" src="/img/schaar.png" alt="Schaar">

      </div>


      <div class="col-7">

        <img class="worbla-img-compass" src="/img/tip-beginner.jpg" alt="Kompas">

      </div>
    </div>



    <div class="row">


      <div class="col-8">

        <img class="worbla-img-planner" src="/img/tip-planner.jpg" alt="Planner">

      </div>

      <div class="col-4">

        <a class="button-yellow planner" href="/tips-en-tricks/cosplayplanner">
          <div class="buttons-linethrough"></div>
          <p>COSPLAYPLANNER</p>
        </a>

      </div>



    </div>


  </div>

@endsection


@section('footer-image')
  class="footer-background"
@endsection
