@extends('master')

@section('title')

  <title>Armor info door Cosplay Guide</title>

@endsection


@section('content')

  <div class="onderdeel pruik">

      <a class="button-yellow back-profiel" href="javascript:history.back()">
        <img class="arrow left" src="/img/iconen/kort-pijltje-links-wit.png" alt="wit pijltje links">
        <p class="left">OVERZICHT</p>
      </a>

      <div class="row header">
        <img id="header-achtergrond-pruik" src="/img/armor-achtergrond.jpg" alt="Cosplay met armor">
        <div class="header-tekst">

          <div class="titel">
            <h1 class="large light">ARMOR</h1>
            <div class="titels-underline small light"></div>
          </div>

          <p>Een indrukwekkend en uitgebreid armor is vaak wat de kleine cosplayers van de grote cosplayers onderscheid.. of dat denkt men toch.</p>
          <p>Hier tonen we je hoe jij ook aan zo'n geweldig armor kan komen, en dat zonder al te veel moeite.</p>

          <a class="button-yellow button-meer-info" href="#">
            <div class="buttons-linethrough"></div>
            <p>ONTDEK MEER</p>
          </a>

          <p class="link-cosplayer">Bekijk meer van <a class="link" href="https://narga-lifestream.deviantart.com/" target="_blank">Narga Lifestream</a></p>

        </div>
      </div>



      <div class="row meer-info meer-info-target">
        <div class="col-6">

          <div class="titel">
            <h2 class="large">BUY IT</h2>
            <div class="titels-underline medium"></div>
          </div>

          <p>Er zijn talloze winkels, zowel online als offline die bepantsering verkopen van alle tijden in de geschiedenis. Kijk gerust eens rond in deze winkels of je geen bepantsering vindt die past bij jouw personage. Op conventies vind je hen ook steeds terug.</p>

        </div>


        <div class="col-6">
          <img class="large" src="/img/buy-it.png" alt="Voorgemaakte middeleeuwse schouderplaten">
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

          <p>Heeft jouw armor een speciale uiterlijk of maak je simpelweg het liever zelf? Geen probleem! Zelfs al ben je een beginner, dan nog kan je met behulp van de cosplay materialen Worbla en Foam vrij gemakkelijk je eigen bepantsering creëren. Bekijk zeker onze blog hierrond.</p>

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
                <h2 class="small">VOORGEMAAKT</h2>
              </div>


                <div class="link">

                    <a href="https://www.celticwebmerchant.com/nl/zwaarden-en-historische-wapens/speren-paalwapens/speren-werpsperen/" target="_blank"><img src="/img/links/celtic.jpg" alt="Celtic bijl"></a>

                    <a class="tekst" href="https://www.celticwebmerchant.com/nl/zwaarden-en-historische-wapens/speren-paalwapens/speren-werpsperen/" target="_blank">
                      <p>Celtic</p>
                      <p class="sub-info">België</p>
                    </a>

                </div>



                <div class="link">

                    <a href="https://www.facebook.com/comptoirdelours/" target="_blank"><img src="/img/links/comptoir.jpg" alt="Armor van comptoir"></a>

                    <a class="tekst" href="https://www.facebook.com/comptoirdelours/" target="_blank">
                      <p>Comptoir de l'ours</p>
                      <p class="sub-info">Frankrijk</p>
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
          <img src="/img/armor-links.jpg" alt="Bepantsering">
        </div>
      </div>

  </div>


@endsection


@section('footer-image')
  class="footer-background"
@endsection
