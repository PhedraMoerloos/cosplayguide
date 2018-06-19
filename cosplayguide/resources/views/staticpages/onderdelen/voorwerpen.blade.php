@extends('master')


@section('title')
  <title>Cosplay voorwerpen</title>
@endsection

@section('follow')
  <meta name="robots" content="noindex, nofollow" />
@endsection


@section('content')

  <div class="onderdeel pruik">

      <a class="button-yellow back-profiel" href="javascript:history.back()">
        <img class="arrow left" src="/img/iconen/kort-pijltje-links-wit.png" alt="wit pijltje links">
        <p class="left">OVERZICHT</p>
      </a>

      <div class="row header">
        <img id="header-achtergrond-voorwerp" src="/img/voorwerp-achtergrond.jpg" alt="Cosplay met boog">
        <div class="header-tekst">

          <div class="titel">
            <h1 class="large light">VOORWERP</h1>
            <div class="titels-underline small light"></div>
          </div>

          <p>Of je personage nu een wapen als een boog of zwaard bezit of accessoires draagt zoals een riem of bril, ze zijn meestal het makkelijkst te vinden.</p>
          <p>Of je ze nu liever kant en klaar wilt kopen of ze liever zelf wilt maken, we zetten je op weg.</p>

          <a class="button-yellow button-meer-info" href="#">
            <div class="buttons-linethrough"></div>
            <p>ONTDEK MEER</p>
          </a>

          <p class="link-cosplayer">Bekijk meer van <a class="link" href="https://www.kamuicosplay.com/" target="_blank">Kamui Cosplay</a></p>

        </div>
      </div>



      <div class="row meer-info meer-info-target">
        <div class="col-6">

          <div class="titel">
            <h2 class="large">CONVENTIES</h2>
            <div class="titels-underline medium"></div>
          </div>

          <p>Conventies zijn vaak de beste plaats om je voorraad van voorwerpen en accesoires op te slagen. Allerlei winkels gespecialiseerd in de verkoop van deze wapens en voorwerpen bevinden zich op één plaats met mensen aanwezig om je verder te helpen.</p>

        </div>


        <div class="col-6">
          <img class="large" src="/img/conventions.png" alt="Cosplay conventie groepsfoto">
        </div>
      </div>



      <div class="row meer-info">

        <div class="col-6">
          <img class="large" src="/img/worbla-shape-purple.png" alt="Worbla met heat gun">
        </div>

        <div class="col-6">

          <div class="titel">
            <h2 class="large">WORBLA & FOAM</h2>
            <div class="titels-underline medium"></div>
          </div>

          <p>Net zoals bij je armor kan je jezelf de vraag stellen of je je voorwerp niet liever zelf maakt. Geen probleem! Zelfs al ben je een beginner, dan nog kan je met behulp van de cosplay materialen Worbla en Foam vrij gemakkelijk je eigen bepantsering creëren. Bekijk zeker onze blog hierrond.</p>

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
                <h2 class="small">WEBSHOPS</h2>
              </div>


                <div class="link">

                    <a href="https://www.fabion.nl/" target="_blank"><img src="/img/links/fabion.jpg" alt="Dolken van Fabion"></a>

                    <a class="tekst" href="https://www.fabion.nl/" target="_blank">
                      <p>Fabion</p>
                      <p class="sub-info">Zwaarden</p>
                    </a>

                </div>



                <div class="link">

                    <a href="https://www.celticwebmerchant.com/nl/" target="_blank"><img src="/img/links/celtic-voorwerp.jpg" alt="Bijl"></a>

                    <a class="tekst" href="https://www.celticwebmerchant.com/nl/" target="_blank">
                      <p>Celtic</p>
                      <p class="sub-info">Keltische voorwerpen</p>
                    </a>

                </div>




            </div> <!-- einde col-6-->


            <div class="col-6">

              <div class="titel">
                <h2 class="small">WORBLA</h2>
              </div>


              <div class="link">

                  <a href="https://www.cosplaysupplies.com/store.php?s=JK6K" target="_blank"><img src="/img/links/cosplaysupplies.jpg" alt="Cosplaysupplies webshop"></a>

                  <a class="tekst" href="https://www.cosplaysupplies.com/store.php?s=JK6K" target="_blank">
                    <p>Cosplaysupplies</p>
                    <p class="sub-info">USA</p>
                  </a>

              </div>



              <div class="link">

                  <a href="https://cosplayshop.be/en/product-category/thermoplastics/" target="_blank"><img src="/img/links/cosplayshop.jpg" alt="Cosplayshop"></a>

                  <a class="tekst" href="https://cosplayshop.be/en/product-category/thermoplastics/" target="_blank">
                    <p>Cosplayshop</p>
                    <p class="sub-info">België</p>
                  </a>

              </div>

            </div>

          </div>

        </div>

        <div class="col-4 links-image-rechts">
          <img src="/img/voorwerp-links.jpg" alt="fototoetstel uit de oorlog">
        </div>
      </div>

  </div>


@endsection


@section('footer-image')
  class="footer-background"
@endsection
