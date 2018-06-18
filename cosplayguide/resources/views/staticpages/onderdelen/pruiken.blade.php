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

        <p>Een pruik kan je cosplay doen maken of vallen. Een pruik van goede kwaliteit, die goed blijft zitten en gemakkelijk aan te doen is, is alles.</p>
        <p>Wat je budget ook is, we geven je een aantal opties om de perfecte pruik voor jouw cosplay te vinden.</p>

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
          <h2 class="large">LACEFRONT</h2>
          <div class="titels-underline medium"></div>
        </div>

        <p>Een pruik met lacefront heeft een soort fijn netje aan de haarlijn dat kan worden bijgeknipt en vastgeplakt word aan het voorhoofd met doorzichtige lijm. Dit soort pruik is meestal duurder maar ziet er ook veel realistischer uit door de nabootsing van de specifieke haarlijn.</p>

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

        <p>De hoeveelheid kleuren in pruiken een winkel aanbied is belangrijk. Daarnaast is er ook een groot kwaliteitsverschil in uit hoeveel kleuren die haarkleur bestaat. Vaak zitten er namelijk meerdere kleuren in ons haar, wat zorgt voor een realistischere pruik.</p>

      </div>
    </div>



    <div class="row meer-info">
      <div class="col-6">

        <div class="titel">
          <h2 class="large oversize">HITTEBESTENDIG</h2>
          <div class="titels-underline medium"></div>
        </div>

        <p>Een pruik heeft meestal een vrij standaard kapsel. Vaak worden de korte stukken vooraan ook iets langer gelaten zodat hier zelf nog aan geknipt kan worden. Of je de pruik ook nog kan aanpassen met een stijl- of krultang maakt een groot verschil. Hiervoor is hittebestendigheid nodig.</p>

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

                  <a href="https://www.kamuicosplay.com/" target="_blank"><img src="/img/links/kamui-cosplay.jpg" alt="Kamuicosplay"></a>

                  <a class="tekst" href="https://www.kamuicosplay.com/0" target="_blank">
                    <p>Kamuicosplay</p>
                    <p class="sub-info">Duitsland</p>
                  </a>

              </div>



              <div class="link">

                  <a href="https://www.youtube.com/channel/UC2GHrm3pUEi8iWAe41UWRzA" target="_blank"><img src="/img/links/arda-wigs-tutorials.jpg" alt="Arda wigs cosplay"></a>

                  <a class="tekst" href="https://www.youtube.com/channel/UC2GHrm3pUEi8iWAe41UWRzA" target="_blank">
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

                <a href="https://www.wigisfashion.de/" target="_blank"><img src="/img/links/wigisfashion.jpg" alt="Kamuicosplay"></a>

                <a class="tekst" href="https://www.wigisfashion.de/" target="_blank">
                  <p>Wigisfashion</p>
                  <p class="sub-info">Klein budget</p>
                </a>

            </div>



            <div class="link">

                <a href="https://www.arda-wigs.com/" target="_blank"><img src="/img/links/arda-wigs.jpg" alt="Arda wigs cosplay"></a>

                <a class="tekst" href="https://www.arda-wigs.com/" target="_blank">
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
