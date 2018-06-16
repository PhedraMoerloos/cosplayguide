@extends('master')


@section('title')
  <title>Kies je pruik</title>
@endsection

@section('content')

<div class="onderdeel pruik">

    <a class="button-yellow back-profiel" href="javascript:history.back()">
      <img class="arrow left" src="/img/iconen/kort-pijltje-links-wit.png" alt="wit pijltje links">
      <p class="left">OVERZICHT</p>
    </a>

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



    <div class="row links">
      <div class="col-8">

        <div class="titel extra-large">
          <h2 class="extra-large">ENKELE LINKS</h2>
          <div class="titels-underline large"></div>
        </div>


        <div class="row">

          <div class="col-6">

            <div class="titel">
              <h2 class="small">TUTORIALS</h2>
            </div>


              <div class="link">

                  <a href="#"><img src="/img/links/kamui-cosplay.jpg" alt="Kamuicosplay"></a>

                  <a class="tekst" href="#">
                    <p>Kamuicosplay</p>
                    <p class="sub-info">Duitsland</p>
                  </a>

              </div>



              <div class="link">

                  <a href="#"><img src="/img/links/arda-wigs-tutorials.jpg" alt="Arda wigs cosplay"></a>

                  <a class="tekst" href="#">
                    <p>Arda Wigs</p>
                    <p class="sub-info">USA</p>
                  </a>

              </div>




          </div> <!-- einde col-6-->


          <div class="col-6">

            <div class="titel">
              <h2 class="small">WEBSHOPS</h2>
            </div>


            <div class="link">

                <a href="#"><img src="/img/links/wigisfashion.jpg" alt="Kamuicosplay"></a>

                <a class="tekst" href="#">
                  <p>Wigisfashion</p>
                  <p class="sub-info">Klein budget</p>
                </a>

            </div>



            <div class="link">

                <a href="#"><img src="/img/links/arda-wigs.jpg" alt="Arda wigs cosplay"></a>

                <a class="tekst" href="#">
                  <p>Arda wigs</p>
                  <p class="sub-info">Medium budget</p>
                </a>

            </div>

          </div>

        </div>

      </div>

      <div class="col-4 links-image-rechts">
        <img src="/img/pruik-links.jpg" alt="Haar op gele achtergrond">
      </div>
    </div>

</div>


@endsection


@section('footer-image')
  class="footer-background"
@endsection
