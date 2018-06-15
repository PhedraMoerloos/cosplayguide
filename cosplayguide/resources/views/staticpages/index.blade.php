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

        <p class="bold">Bekijk <span>nog meer </span>inspirerende cosplays op:</p>
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

    </div><!-- einde row header -->


    <div class="row create-inspire">

      <div class="col-8">
        <img src="/img/create-inspire.jpg" alt="Voorbeeld cosplay begeleiding">
      </div>

      <div class="col-4">
        <div class="titel">
          <h1 class="large purple">CREATE & INSPIRE</h1>
          <div class="titels-underline small purple"></div>
        </div>

        <p class="bold">Een cosplay maken is een geweldig avontuur maar kan overweldigend zijn om mee te starten. Daarom besloten .</p>
        <p class="subtext">begeleiding en externe links bij elke stap van het cosplay proces.<br> brothers in arms doen namelijk niets liever dan jou verder <br> te helpen.</p>

        <a class="button-yellow" href="/over-cosplay">
          <p>HET COSPLAY PROCES</p>
          <div class="buttons-linethrough right"></div>
        </a>

      </div>

    </div>


    <div class="row worbla-teaser">

      <div class="col-4">
        <div class="titel">
          <h1 class="large purple">WOBRLA & FOAM</h1>
          <div class="titels-underline small purple"></div>
        </div>

        <p class="subtext">Worbla en foam zijn 2 van de meest gebruikte materialen bij cosplay. Daarnaast zijn ze relatief beginner friendly en tillen ze je cosplay meteen naar en hoger niveau. In onze blog geven je alvast een idee van wat Worbla is en hoe je het
gebruikt.</p>

        <a class="button-yellow" href="/over-cosplay">
          <p>ONTDEK NU</p>
          <div class="buttons-linethrough right"></div>
        </a>

      </div>


      <div class="col-8">
        <img src="/img/worbla-wapen.png" alt="Wapen gemaakt met Worbla">
      </div>

    </div>






  </div>

@endsection


@section('footer-image')
  class="footer-background"
@endsection
