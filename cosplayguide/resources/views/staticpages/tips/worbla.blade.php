@extends('master')


@section('title')
  <title>Tip Worbla & Foam</title>
@endsection


@section('content')

  <div class="onderdeel worbla">


      <div class="row header">

        <div class="col-4">
          <div class="header-tekst tips">

            <div class="titel">
              <h1 class="large purple">Worbla <br>& <br>Foam</h1>
              <div class="titels-underline medium purple"></div>
            </div>

            <p class="dark">Worbla en foam zijn materialen die gebruikt worden in cosplay om voorwerpen te creëeren. Wil je graag weten hoe je ze best gebruikt?</p>

            <a class="button-yellow button-meer-info" href="#">
              <div class="buttons-linethrough"></div>
              <p>ONTDEK</p>
            </a>
          </div>
        </div>

        <div class="col-8">
          <iframe src="https://www.youtube.com/embed/VZl65FRUZnw" allowfullscreen></iframe>
        </div>


      </div><!-- einde header -->



      <div class="row meer-info meer-info-target">
        <div class="col-6 tekst">

          <div class="titel">
            <h2 class="large oversize">CREATE A PATTERN</h2>
            <div class="titels-underline medium"></div>
          </div>

          <p class="dark">Allereerst ga je van start met het maken van een patroon. Je legt een wit papier of keukenrol vel op de plaats waar het onderdeel zich zal bevinden, bijvoorbeeld op je arm als je armbescherming maakt. Hier schets je je voorwerp en knipt het vervolgens uit.</p>

          <p class="nummer first">1</p>

        </div>


        <div class="col-6">
          <img class="large" src="/img/worbla/worbla-pattern.png" alt="Worbla pattern getekend">
        </div>
      </div>



      <div class="row meer-info">

        <div class="col-6">
          <img class="large" src="/img/worbla/worbla-draw.png" alt="Worbla patroon erop getekend">
        </div>

        <div class="col-6 tekst">

          <div class="titel">
            <h2 class="large oversize">DRAW ON THE WORBLA</h2>
            <div class="titels-underline medium"></div>
          </div>

          <p class="dark">Hierna teken je je patroon over op je foam en worbla. Foam voor het onderdeel zelf, deze zal zorgen voor je dikte. Bij het overtekenen op Worbla laat je best een beetje extra ruimte om het later rond de foam te vouwen. Bij afgeronde lijnen voorzie je "tandjes" zoals op de foto.</p>

          <p class="nummer second">2</p>

        </div>
      </div>



      <div class="row meer-info">
        <div class="col-6 tekst">

          <div class="titel">
            <h2 class="large oversize">HEAT UP AND SHAPE</h2>
            <div class="titels-underline medium"></div>
          </div>

          <p class="dark">En dan de laatste en leukste stap. Verhit de foam met je hitteblazer stuk voor stuk. Werk in secties. Vouw dan steeds de worbla rond je foam object en vorm het waar nodig. Hou deze dan in plaats tot hij afgekoeld is. Et voila, je bent klaar!</p>

          <p class="nummer third">3</p>

        </div>


        <div class="col-6">
          <img class="large" src="/img/worbla/worbla-shape.png" alt="Worbla">
        </div>
      </div>



      <div class="row links">
        <div class="col-8">

          <div class="titel extra-large">
            <h2 class="extra-large">THE EXPERTS</h2>
            <div class="titels-underline large"></div>
          </div>


          <div class="row">

            <div class="col-6">

              <div class="titel">
                <h2 class="small">TUTORIALS</h2>
              </div>


                <div class="link">

                    <a href="https://www.kamuicosplay.com/" target="_blank"><img src="/img/links/kamui-cosplay.jpg" alt="Kamuicosplay"></a>

                    <a class="tekst" href="https://www.kamuicosplay.com/" target="_blank">
                      <p>Kamuicosplay</p>
                      <p class="sub-info">Duitsland</p>
                    </a>

                </div>



                <div class="link">

                    <a href="https://www.youtube.com/channel/UCN0PMx39E5LBMSf9gklYhDg/featured" target="_blank"><img src="/img/links/jak-cosplay.jpg" alt="Jak cosplay tutorials"></a>

                    <a class="tekst" href="https://www.youtube.com/channel/UCN0PMx39E5LBMSf9gklYhDg/featured" target="_blank">
                      <p>Jak Cosplay</p>
                      <p class="sub-info">Duitsland</p>
                    </a>

                </div>




            </div> <!-- einde col-6-->


            <div class="col-6">

              <div class="titel">
                <h2 class="small">WEBSHOPS</h2>
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
          <img src="/img/worbla-arm-rechts.png" alt="Worbla ongeschilderde armbescherming">
        </div>
      </div>

  </div>

@endsection


@section('footer-image')
  class="footer-background"
@endsection
