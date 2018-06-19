@extends('master')


@section('title')
  <title>Uitleg over grime door Cosplay Guide</title>
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
        <img id="header-achtergrond-grime" src="/img/grime-achtergrond.jpg" alt="Cosplay met pruik">
        <div class="header-tekst">

          <div class="titel">
            <h1 class="large light">GRIME</h1>
            <div class="titels-underline small light"></div>
          </div>

          <p>Of je nu een zombie, alien, enge clown of een menselijk personage cosplayed, grime zal je personage echt tot leven laten komen.</p>
          <p>Grime laat je namelijk toe een overeenkomend reliëf, huidskleur en gezichtsstructuur te creëren.</p>

          <a class="button-yellow button-meer-info" href="#">
            <div class="buttons-linethrough"></div>
            <p>ONTDEK MEER</p>
          </a>

          <p class="link-cosplayer">Bekijk meer van <a class="link" href="https://alysontabbitha.deviantart.com/" target="_blank">Alyson Tabbitha</a></p>

        </div>
      </div>



      <div class="row meer-info meer-info-target">
        <div class="col-6">

          <div class="titel">
            <h2 class="large">CONTOURING</h2>
            <div class="titels-underline medium"></div>
          </div>

          <p>Contouring is de simpelse vorm van grime. Je gebruikt een highlighter en contouring kleur om de schaduwen en highlights van je personage's gezicht na te bootsen. Zo komt je gezichtsstructuur meteen overeen en wordt je één met je personage.</p>

        </div>


        <div class="col-6">
          <img src="/img/contour.png" alt="Too cool for school contouring">
        </div>
      </div>



      <div class="row meer-info">

        <div class="col-6">
          <img class="large" src="/img/latex.png" alt="Latex elfen oren">
        </div>

        <div class="col-6">

          <div class="titel">
            <h2 class="large">PAINT & LATEX</h2>
            <div class="titels-underline medium"></div>
          </div>

          <p>Het gebruik van gezichtsverf en liquid latex nemen het overnemen van je personage's uiterlijk naar een nieuw level. Je neemt namelijk het reliëf ook over en kan zo allerlei illusies creëren. Hoorns? Geen probleem! Elfenoren, let's go!</p>

        </div>
      </div>



      <div class="row meer-info">
        <div class="col-6">

          <div class="titel">
            <h2 class="large oversize">THE EXTRA MILE</h2>
            <div class="titels-underline medium"></div>
          </div>

          <p>De laatste en meest extreme optie is sculpting. Dit betekend simpel gezegd het creëren van een soort masker in de vorm van jouw gezicht, dat volledig bestaat uit sculpting materiaal. Verbaas zo iedereen met jouw levensechte masker! </p>

        </div>


        <div class="col-6">
          <img src="/img/sculpt.png" alt="Sculpting materiaal">
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

                    <a href="https://www.youtube.com/channel/UCi1BlZbfl9dUsMGryKjE7Lw" target="_blank"><img src="/img/links/alyson.jpg" alt="Alyson Tabbitha cosplay"></a>

                    <a class="tekst" href="https://www.youtube.com/channel/UCi1BlZbfl9dUsMGryKjE7Lw" target="_blank">
                      <p>Alyson Tabbitha</p>
                      <p class="sub-info">Contouring</p>
                    </a>

                </div>



                <div class="link">

                    <a href="https://www.youtube.com/playlist?list=PLga2NiCpkdiWtaW5o1_3JxGlnELZ1-Oc0" target="_blank"><img src="/img/links/jubayna.jpg" alt="Jubayna Cosplay"></a>

                    <a class="tekst" href="https://www.youtube.com/playlist?list=PLga2NiCpkdiWtaW5o1_3JxGlnELZ1-Oc0" target="_blank">
                      <p>Jubayna Cosplay</p>
                      <p class="sub-info">Latex</p>
                    </a>

                </div>




            </div> <!-- einde col-6-->


            <div class="col-6">

              <div class="titel">
                <h2 class="small">WEBSHOPS</h2>
              </div>


              <div class="link">

                  <a href="http://www.liglinister.be/" target="_blank"><img src="/img/links/liglinister.jpg" alt="Kamuicosplay"></a>

                  <a class="tekst" href="http://www.liglinister.be/" target="_blank">
                    <p>Liglinister</p>
                    <p class="sub-info">België</p>
                  </a>

              </div>



              <div class="link">

                  <a href="https://www.amazon.co.uk/s/ref=nb_sb_noss_2?url=search-alias%3Daps&field-keywords=face+paint" target="_blank"><img src="/img/links/amazon.jpg" alt="Amazon logo"></a>

                  <a class="tekst" href="https://www.amazon.co.uk/s/ref=nb_sb_noss_2?url=search-alias%3Daps&field-keywords=face+paint" target="_blank">
                    <p>Amazon</p>
                    <p class="sub-info">Internationaal</p>
                  </a>

              </div>

            </div>

          </div>

        </div>

        <div class="col-4 links-image-rechts">
          <img class="grime-foto-rechts" src="/img/grime-links.jpg" alt="verf potjes">
        </div>
      </div>

  </div>


@endsection


@section('footer-image')
  class="footer-background"
@endsection
