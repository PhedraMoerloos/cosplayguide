@extends('master')


@section('content')

  <div class="onderdeel pruik">

      <a class="button-yellow back-profiel" href="javascript:history.back()">
        <img class="arrow left" src="/img/iconen/kort-pijltje-links-wit.png" alt="wit pijltje links">
        <p class="left">OVERZICHT</p>
      </a>

      <div class="row header">
        <img id="header-achtergrond-pruik" src="/img/stoffen-achtergrond.jpg" alt="Frozen Else cosplay">
        <div class="header-tekst">

          <div class="titel">
            <h1 class="large light">STOFFEN</h1>
            <div class="titels-underline small light"></div>
          </div>

          <p>Het deel dat iedereen afschrikt: stof, stikken, naaien. Gelukkig zijn er tal van manieren om iedereen een geweldig kostuum te laten maken.</p>
          <p>De belangrijkste boodschap die we je alvast meegeven is dat je niet alles from scratch hoeft te doen!</p>

          <a class="button-yellow button-meer-info" href="#">
            <div class="buttons-linethrough"></div>
            <p>ONTDEK MEER</p>
          </a>

          <p class="link-cosplayer">Bekijk meer van <a class="link" href="https://kikolondon.deviantart.com/" target="_blank">KikoLondon</a></p>

        </div>
      </div>



      <div class="row meer-info meer-info-target">
        <div class="col-6">

          <div class="titel">
            <h2 class="large">BASICS</h2>
            <div class="titels-underline medium"></div>
          </div>

          <p>Koop je basis onderdelen! Koop een eenvoudige broek, t-shirt,.. die als basis kunnen dienen voor jouw kostuum. Werk hier dan verder op met je eigen stoffen die je koopt. Ze zijn goedkoop en zo elimineer je meteen het moeilijkste onderdeel van een kostuum maken.</p>

        </div>


        <div class="col-6">
          <img class="large" src="/img/basic.png" alt="H&M basic zwart tank topje">
        </div>
      </div>



      <div class="row meer-info">

        <div class="col-6">
          <img class="large" src="/img/stoffen.png" alt="Soorten stoffen met naam">
        </div>

        <div class="col-6">

          <div class="titel">
            <h2 class="large">STOFFEN</h2>
            <div class="titels-underline medium"></div>
          </div>

          <p>Hiernaast heb je een overzichtje van een aantal van de bekendste stoffen en hoe ze eruit zien. Als je voor de meest simpele stof wilt gaan, is de greige/onbewerkte stof je beste vriend. Ga langs in een stoffenwinkel en toon hen je personage. Ze helpen je ook zeker verder!</p>

        </div>
      </div>



      <div class="row meer-info">
        <div class="col-6">

          <div class="titel">
            <h2 class="large oversize">STIKKEN</h2>
            <div class="titels-underline medium"></div>
          </div>

          <p>Het gevreesde machine. Ben je toe aan de uitdaging? Bekijk enkele tutorials op Youtube of neem een aantal basis stiklessen in je lokale kunstacademie. Daarnaast kan je het ook houden op naaien met naald en draad of een kleermaakster inschakelen.</p>

        </div>


        <div class="col-6">
          <img class="large" src="/img/naaimachine.png" alt="Naaimachine">
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

                    <a href="https://www.youtube.com/watch?v=xdHnrlrQ6RE" target="_blank"><img src="/img/links/crafty-amy.jpg" alt="Profielfoto Crafty Amy"></a>

                    <a class="tekst" href="https://www.youtube.com/watch?v=xdHnrlrQ6RE" target="_blank">
                      <p>Crafty Amy</p>
                      <p class="sub-info">Naaimachine</p>
                    </a>

                </div>



                <div class="link">

                    <a href="https://www.youtube.com/channel/UCndGQlzTcnrFNIXGF119cKQ" target="_blank"><img src="/img/links/online-fabric-store.jpg" alt="Stoffen van online fabric store"></a>

                    <a class="tekst" href="https://www.youtube.com/channel/UCndGQlzTcnrFNIXGF119cKQ" target="_blank">
                      <p>Online Fabric Store</p>
                      <p class="sub-info">Algemeen</p>
                    </a>

                </div>




            </div> <!-- einde col-6-->


            <div class="col-6">

              <div class="titel">
                <h2 class="small">WEBSHOPS</h2>
              </div>


              <div class="link">

                  <a href="https://www.modecoupon-stniklaas.be/" target="_blank"><img src="/img/links/modecoupon.jpg" alt="Modecoupon winkel"></a>

                  <a class="tekst" href="https://www.modecoupon-stniklaas.be/" target="_blank">
                    <p>Modecoupon</p>
                    <p class="sub-info">Sint-Niklaas</p>
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
