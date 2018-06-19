@extends('master')



@section('title')
  <title>Over Cosplay</title>
@endsection


@section('description')
  <meta name="description" content="Wil je meer weten over het cosplay leven? We gaan samen met jou door het proces dat alle cosplays gemeenschappelijk hebben om je een duidelijker beeld te geven.">
@endsection


@section('follow')
  <meta name="robots" content="index, follow">
@endsection



@section('content')

<!-- About cosplay -->
<div class="about">


  <div class="row header">

    <div class="col-3">
      <p>Een cosplay maken is geen simpele opdracht. En hoewel elke cosplay uniek is in zijn creatie, begeleiden we je bij elke stap. <span>Leer hier alvast het algemene cosplayproces dat alle cosplays delen.</span></p>
    </div>

    <div class="col-5">
      <div class="header-tekst tips">

        <div class="titel">
          <h1 class="large purple">THE COSPLAY LIFE</h1>
          <div class="titels-underline medium purple"></div>
        </div>

        <img src="/img/about.png" alt="profiel persoon in cosplay, zonder cosplay">

      </div>
    </div>

    <div class="col-3">
      <a class="button-yellow button-meer-info" href="#">
        <div class="buttons-linethrough"></div>
        <p>LEER HOE</p>
      </a>
    </div>


  </div><!-- einde header -->


  <div class="worbla">

    <div class="row meer-info meer-info-target">
      <div class="col-6 tekst">

        <div class="titel">
          <h2 class="large oversize">WHAT DO I NEED?</h2>
          <div class="titels-underline medium"></div>
        </div>

        <p class="dark">Eerst en vooral gaan we na welke onderdelen je nodig zal hebben voor je cosplay creatie. Heeft je personage een andere haarkleur? Dan heb je waarschijnlijk nood aan een pruik. Heb je lenzen, bepantsering of wapens nodig? We geven je alle info.</p>

        <a class="button-yellow naar-stap-twee" href="#">
          <div class="buttons-linethrough"></div>
          <p>WAT HIERNA?</p>
        </a>

        <p class="nummer first">1</p>

      </div>


      <div class="col-6">
        <img class="large" src="/img/stofrol.png" alt="Rol draad">
      </div>
    </div>



    <div class="row meer-info stap-twee">

      <div class="col-6">
        <img class="large" src="/img/where-go.png" alt="Arda wigs website">
      </div>

      <div class="col-6 tekst">

        <div class="titel">
          <h2 class="large oversize">WHERE DO I GO?</h2>
          <div class="titels-underline medium"></div>
        </div>

        <p class="dark">Eens je weet waar je naar zal moeten gaan shoppen, kom de volgende vraag? "Waar ga ik om dit gerief?". Hierdoor voorzien we bij elk onderdeel allerlei links naar webshops en fysieke winkels. Neem daarnaast steeds een kijkje op conventies.</p>

        <a class="button-yellow naar-stap-drie" href="#">
          <div class="buttons-linethrough"></div>
          <p>WAT HIERNA?</p>
        </a>

        <p class="nummer second">2</p>

      </div>
    </div>



    <div class="row meer-info stap-drie">
      <div class="col-6 tekst">

        <div class="titel">
          <h2 class="large oversize">HOW DO I MAKE IT?</h2>
          <div class="titels-underline medium"></div>
        </div>

        <p class="dark">En dan komt het moeilijkste en leukste deel van heel het cosplayproces: de creatie, het knutselen en knoeien. Om je hierbij bij te staan geven we je links naar allerlei cosplayers die zich bezighouden met het voorzien van tutorials en boeken.</p>

        <div class="join-knop">
          <a href="/register">START JOUW COSPLAY</a>
          <a href="/register"><img src="/img/join-knop.png" alt="Knop met plus teken"></a>
        </div>

        <p class="nummer third">3</p>

      </div>


      <div class="col-6">
        <img class="large" src="/img/how-to.png" alt="Stuk foam met schaar">
      </div>
    </div>

  </div>


</div>

@endsection


@section('footer-image')
  class="footer-background"
@endsection
