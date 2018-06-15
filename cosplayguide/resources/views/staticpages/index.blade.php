@extends('master')

@section('title')
  <title>Wordt jouw favoriete personage bij Cosplay Guide</title>
@endsection

@section('content')

  <div class="home">


    <div class="row header">
      <div class="col-4">

        <div class="home-header-top">

          <div class="titel">
            <h1 class="large purple">BECOME YOUR FAVORITE CHARACTER</h1>
            <div class="titels-underline small purple"></div>
          </div>


          <div class="join-knop">
            <a href="/register">START JOUW COSPLAY</a>
            <a href="/register"><img src="/img/join-knop.png" alt="Knop met plus teken"></a>
          </div>

        </div>

        <p class="bold">Bekijk nog meer inspirerende cosplays op:</p>
        <img src="/img/deviantart.png" alt="Deviantart website logo">

      </div>

      

      <div class="col-7">
        <img src="/img/howling-banshee.jpg" alt="slider">
      </div>

    </div>


  </div>

@endsection


@section('footer-image')
  class="footer-background"
@endsection
