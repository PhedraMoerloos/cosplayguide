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
        <a href="https://www.deviantart.com/photography/people/cosplay/popular-24-hours/" target="_blank"><img class="more-inspiration" src="/img/deviantart.png" alt="Deviantart website logo"></a>

      </div>



      <div class="col-7">

        <div id="carouselHome" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">



            <div class="carousel-item active">

              <img class="d-block" src="/img/howling-banshee.jpg" alt="Foto Howling Banshee cosplay door Arga Lifestream">
              <div class="carousel-caption d-none d-md-block">
                <p>1 of 3</p>
                <a href="https://www.deviantart.com/art/Howling-Banshee-For-vengeance-632099071" target="_blank">HOWLING BANSHEE</a>
              </div>


            </div>


            <div class="carousel-item">

              <img class="d-block" src="/img/night-elf.jpg" alt="Foto Night Elf cosplay door Arga Lifestream">
              <div class="carousel-caption d-none d-md-block">
                <p>2 of 3</p>
                <a href="https://narga-lifestream.deviantart.com/art/Tyrande-Warriors-of-the-night-Assemble-743113282" target="_blank">NIGHT ELF</a>
              </div>


            </div>


            <div class="carousel-item">

              <img class="d-block" src="/img/wolverine.jpg" alt="Foto Wolverine cosplay">
              <div class="carousel-caption d-none d-md-block">
                <p>3 of 3</p>
                <a href="https://fatalis-polunica.deviantart.com/art/Wolverine-cosplay-6-151569061" target="_blank">WOLVERINE</a>
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
          <h2 class="large purple">CREATE & INSPIRE</h2>
          <div class="titels-underline small purple"></div>
        </div>

        <p class="bold">Een cosplay maken is een geweldig avontuur maar kan overweldigend zijn om mee te starten. Vandaar onze begeleiding in het proces.</p>
        <p class="subtext">We voorzien how to's en externe links bij elke stap van het <br>cosplayproces. Geïnteresseerd hoe dat proces in elkaar zit?</p>

        <a class="button-yellow" href="/over-cosplay">
          <p>HET COSPLAY PROCES</p>
          <div class="buttons-linethrough right"></div>
        </a>

      </div>

    </div>


    <div class="row worbla-teaser">

      <div class="col-4">
        <div class="titel">
          <h2 class="large purple">WOBRLA & FOAM</h2>
          <div class="titels-underline small purple"></div>
        </div>

        <p class="subtext">Worbla en foam zijn 2 van de meest gebruikte materialen bij cosplay. Daarnaast zijn ze relatief beginner friendly en tillen ze je cosplay meteen naar en hoger niveau. In onze blog geven je alvast een idee van wat Worbla is en hoe je het
gebruikt.</p>

        <a class="button-yellow" href="/tips-en-tricks/worbla-en-foam">
          <p>ONTDEK NU</p>
          <div class="buttons-linethrough right"></div>
        </a>

      </div>


      <div class="col-8">
        <img src="/img/worbla-wapen.png" alt="Wapen gemaakt met Worbla">
      </div>

    </div>



    <div class="row justify-content-center testimonials">

      <div class="col-6">

        <div class="titel">
          <h2 class="small">TESTIMONIALS</h2>
          <div class="titels-underline small"></div>
        </div>




        <div id="carouselTestimonials" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">




            <div class="carousel-item active">

              <img class="d-block img-fluid" src="/img/testimonial-background.jpg" alt="Grijze achtergrond">
              <div class="carousel-caption d-none d-md-block">

                <img class="testimonial-profile" src="/img/testimonials/testimonials-4.jpg" alt="Foto man profiel">

                <p class="name">David</p>

                <div class="stars">
                  <img src="/img/iconen/star-full.svg" alt="ster gevuld">
                  <img src="/img/iconen/star-full.svg" alt="ster gevuld">
                  <img src="/img/iconen/star-full.svg" alt="ster gevuld">
                  <img src="/img/iconen/star-full.svg" alt="ster gevuld">
                  <img src="/img/iconen/star.svg" alt="ster leeg">
                </div>

                <p class="testimonial">Na jaren van conventies bezoeken en andere en andersmans cosplay te bewonderen besloot ik het roer in eigen handen te nemen. Cosplay Guide zorgde ervoor dat ik steeds op het juiste pad bleef en zonder al te veel problemen mijn cosplay af kreeg!</p>

                <div class="join-knop">
                  <a href="/register">START JOUW COSPLAY</a>
                  <a href="/register"><img src="/img/join-knop.png" alt="Knop met plus teken"></a>
                </div>

              </div>

            </div>




            <div class="carousel-item">

              <img class="d-block img-fluid" src="/img/testimonial-background.jpg" alt="Grijze achtergrond">
              <div class="carousel-caption d-none d-md-block">

                <img class="testimonial-profile" src="/img/testimonials/testimonials-2.jpg" alt="Foto vrouw profiel">

                <p class="name">Sarah</p>

                <div class="stars">
                  <img src="/img/iconen/star-full.svg" alt="ster gevuld">
                  <img src="/img/iconen/star-full.svg" alt="ster gevuld">
                  <img src="/img/iconen/star-full.svg" alt="ster gevuld">
                  <img src="/img/iconen/star-full.svg" alt="ster gevuld">
                  <img src="/img/iconen/star-full.svg" alt="ster gevuld">
                </div>

                <p class="testimonial">Ik ben geen handig persoon. Dit hield me dan ook steeds tegen in het maken van mijn eigen cosplays. Ik had al enkele keren een halve poging gedaan maar raakte steeds ontmoedigd. Toen ik dan Cosplay Guide ontdekte zag ik alles meteen veel beter zitten!</p>

                <div class="join-knop">
                  <a href="/register">START JOUW COSPLAY</a>
                  <a href="/register"><img src="/img/join-knop.png" alt="Knop met plus teken"></a>
                </div>

              </div>

            </div>




            <div class="carousel-item">

              <img class="d-block img-fluid" src="/img/testimonial-background.jpg" alt="Grijze achtergrond">
              <div class="carousel-caption d-none d-md-block">

                <img class="testimonial-profile" src="/img/testimonials/testimonials-1.jpg" alt="Foto vrouw profiel">

                <p class="name">Ashley</p>

                <div class="stars">
                  <img src="/img/iconen/star-full.svg" alt="ster gevuld">
                  <img src="/img/iconen/star-full.svg" alt="ster gevuld">
                  <img src="/img/iconen/star-full.svg" alt="ster gevuld">
                  <img src="/img/iconen/star-full.svg" alt="ster gevuld">
                  <img src="/img/iconen/star.svg" alt="ster leeg">
                </div>

                <p class="testimonial">Ik ging al jaren naar FACTS in Gent. Steeds een geweldig weekend! Vaak stond ik voor al die standjes en twijfelde maar er is geen overzicht.. zoveel chaos. "Hoe begin ik hier aan" dacht ik dan. Cosplay Guide bied echt een mooi overzicht.</p>

                <div class="join-knop">
                  <a href="/register">START JOUW COSPLAY</a>
                  <a href="/register"><img src="/img/join-knop.png" alt="Knop met plus teken"></a>
                </div>

              </div>


            </div>



          </div> <!-- einde carousel-inner -->

          <a class="carousel-control-prev progress" href="#carouselTestimonials" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next progress" href="#carouselTestimonials" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>

        </div> <!-- einde carousel testimonials -->


        <img class="telefoon links" src="/img/telefoon-links.png" alt="Oude telefoon met draad">
        <img class="telefoon rechts" src="/img/telefoon-rechts.png" alt="Oude telefoon met draad">

      </div>

    </div>







    <div class="row justify-content-center partners">

      <div class="col-9">

        <div class="titel">
          <h2 class="small">ONZE PARTNERS</h2>
          <div class="titels-underline small grey"></div>
        </div>



        <div class="row justify-content-betweens">

          <div class="col">
            <a href="https://www.deviantart.com/" target="_blank"><img src="/img/partners/deviantart.png" alt="Deviantart logo"></a>
          </div>

          <div class="col">
            <a href="https://www.lensonline.be/nl/?gclid=EAIaIQobChMIv6vrtLHb2wIVwojVCh33UA2TEAAYASAAEgJq_fD_BwE" target="_blank"><img src="/img/partners/lensonline.png" alt="Lensonline logo"></a>
          </div>

          <div class="col">
            <a href="https://www.arda-wigs.com/" target="_blank"><img src="/img/partners/arda-wigs.png" alt="Arda wigs logo"></a>
          </div>

          <div class="col">
              <a href="https://facts.be/nl/" target="_blank"><img src="/img/partners/facts.png" alt="Facts logo"></a>
          </div>

        </div>



        <div class="row justify-content-betweens">

          <div class="col">
              <a href="https://www.amazon.co.uk/" target="_blank"><img src="/img/partners/amazon.png" alt="Amazon logo"></a>
          </div>

          <div class="col">
            <a href="https://www.wigisfashion.de/" target="_blank"><img src="/img/partners/wif.png" alt="Wig is fashion logo"></a>
          </div>

          <div class="col">
            <a href="https://www.modecoupon-stniklaas.be/" target="_blank"><img src="/img/partners/modecoupon.png" alt="Modecoupon logo"></a>
          </div>

          <div class="col">
            <a href="https://www.kamuicosplay.com/" target="_blank"><img src="/img/partners/kamui-cosplay.png" alt="Kamui Cosplay logo"></a>
          </div>

        </div>



      </div>

    </div>



  </div>

@endsection


@section('footer-image')
  class="footer-background"
@endsection
