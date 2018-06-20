@extends('master')


@section('title')
  <title>Welke lenzen kies jij?</title>
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
        <img src="/img/lenzen-achtergrond.jpg" alt="Cosplay met lenzen.">
        <div class="header-tekst">

          <div class="titel">
            <h1 class="large light">LENZEN</h1>
            <div class="titels-underline small light"></div>
          </div>

          <p>Ogen zijn de ziel van jouw cosplay, maar zijn ook een gevoelig onderdeel.. letterlijk. De keuze van je lenzen is daarom ook immens belangrijk.</p>
          <p>Lenzen vinden die je zicht niet schaden en toch je toelaten één te worden met je personage is onze missie.</p>

          <a class="button-yellow button-meer-info" href="#">
            <div class="buttons-linethrough"></div>
            <p>ONTDEK MEER</p>
          </a>

          <p class="link-cosplayer">Bekijk meer van <a class="link" href="https://narga-lifestream.deviantart.com/art/Mask-of-Banshee-Warhammer-40k-Dawn-of-War-III-632099630" target="_blank">Narga Lifestream</a></p>

        </div>
      </div>



      <div class="row meer-info meer-info-target">
        <div class="col-6">

          <div class="titel">
              <h2 class="large">NATUURLIJK</h2>
            <div class="titels-underline medium"></div>
          </div>

          <p>Vaak krijgt een cosplay pas echt die realistische feel eens men de onderdelen een natuurlijk tint gaat geven. Dit geld zowel voor stofkeuzes als voor zaken zoals pruiken en lenzen. Voor een natuurlijkere tint gaan is dus vaak net een opstap voor je cosplay.</p>

        </div>


        <div class="col-6">
          <img src="/img/lenzen-natuurlijk.png" alt="Natuurlijke tinten lenzen">
        </div>
      </div>



      <div class="row meer-info">

        <div class="col-6">
          <img src="/img/lenzen-onnatuurlijk.png" alt="Onnatuurlijke lenzen">
        </div>

        <div class="col-6">

          <div class="titel">
            <h2 class="large">CRAZY DESIGNS</h2>
            <div class="titels-underline medium"></div>
          </div>

          <p>Is "natuurlijk" helemaal niks voor jouw personage? Heeft hij/zij/het verre van een natuurlijke tint maar eerder abnormaal kenmerkende ogen? Dan zijn deze gekke designs helemaal voor jouw! Je hebt ook geluk, want deze zijn gelukkig het makkelijkst te vinden.</p>

        </div>
      </div>



      <div class="row meer-info">
        <div class="col-6">

          <div class="titel">
            <h2 class="large oversize">PRESCRIPTION</h2>
            <div class="titels-underline medium"></div>
          </div>

          <p>Draag je normaal een bril of lenzen? Geen zorgen, je kan steeds winkels vinden met lenzen op sterkte. Ze zijn iets moeilijker te vinden maar we helpen je alvast op weg! Lenzen nemen zonder sterkte is namelijk geen optie voor jou.</p>

        </div>


        <div class="col-6">
          <img src="/img/bril.png" alt="Bril">
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
                <h2 class="small">OP STERKTE</h2>
              </div>


                <div class="link">

                    <a href="https://www.famemonster.eu/beauty/circle-lenses/" target="_blank"><img src="/img/links/famemonster.jpg" alt="Cosplay met lenzen van Famemonster"></a>

                    <a class="tekst" href="https://www.famemonster.eu/beauty/circle-lenses/" target="_blank">
                      <p>Famemonster</p>
                      <p class="sub-info">Europees</p>
                    </a>

                </div>



                <div class="link">

                    <a href="https://www.pinkyparadise.com/" target="_blank"><img src="/img/links/pinkyparadise.jpg" alt="Cosplay met lenzen van Pinkyparadise"></a>

                    <a class="tekst" href="https://www.pinkyparadise.com/" target="_blank">
                      <p>Pinkyparadise</p>
                      <p class="sub-info">Aziatisch</p>
                    </a>

                </div>




            </div> <!-- einde col-6-->


            <div class="col-6">

              <div class="titel">
                <h2 class="small">ZONDER STERKTE</h2>
              </div>


              <div class="link">

                  <a href="https://www.funnylens.de/" target="_blank"><img src="/img/links/funnylens.jpg" alt="Cosplay met lenzen van Funnylens"></a>

                  <a class="tekst" href="https://www.funnylens.de/" target="_blank">
                    <p>Funnylens</p>
                    <p class="sub-info">Duits</p>
                  </a>

              </div>



              <div class="link">

                  <a href="https://www.lensonline.be/nl/" target="_blank"><img src="/img/links/lensonline.jpg" alt="Lensonline logo"></a>

                  <a class="tekst" href="https://www.lensonline.be/nl/" target="_blank">
                    <p>Lensonline</p>
                    <p class="sub-info">Belgisch</p>
                  </a>

              </div>

            </div>

          </div>

        </div>

        <div class="col-4 links-image-rechts">
          <img class="lenzen-foto-rechts" src="/img/lenzen-links.jpg" alt="Lemor met felle ogen">
        </div>
      </div>

  </div>


@endsection


@section('footer-image')
  class="footer-background"
@endsection
