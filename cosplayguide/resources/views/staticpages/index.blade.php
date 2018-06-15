@extends('master')

@section('title')
  <title>Wordt jouw favoriete personage bij Cosplay Guide</title>
@endsection

@section('content')

  <div class="home">


    <div class="row home-header">
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
        <img class="more-inspiration" src="/img/deviantart.png" alt="Deviantart website logo">

      </div>



      <div class="col-7">

        <div id="carouselHome" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">



            <div class="carousel-item active">

              <img class="d-block" src="/img/howling-banshee.jpg" alt="Foto Howling Banshee cosplay door Arga Lifestream">
              <div class="carousel-caption d-none d-md-block">
                <p>1 of 3</p>
                <a href="#">HOWLING BANSHEE</a>
              </div>


            </div>


            <div class="carousel-item">

              <img class="d-block" src="/img/night-elf.jpg" alt="Foto Night Elf cosplay door Arga Lifestream">
              <div class="carousel-caption d-none d-md-block">
                <p>2 of 3</p>
                <a href="#">NIGHT ELF</a>
              </div>


            </div>


            <div class="carousel-item">

              <img class="d-block" src="/img/wolverine.jpg" alt="Foto Wolverine cosplay">
              <div class="carousel-caption d-none d-md-block">
                <p>3 of 3</p>
                <a href="#">WOLVERINE</a>
              </div>


            </div>



          </div>

          <a class="carousel-control-prev progress" href="#carouselHome" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next progress" href="#carouselHome" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>

        </div>

      </div>

    </div>






  </div>

@endsection


@section('footer-image')
  class="footer-background"
@endsection
