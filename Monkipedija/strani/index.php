<?php
session_start();
?>

<!DOCTYPE html>
<html lang="sl">

<head>
  <?php
  include "../php/glava.php";
  ?>
</head>

<body>
  <?php
  if (isset($_SESSION['logged_in'])) { //v primeru da prvič odpremo stran sejna spremenljivka logged in še ni določena, kar potem kaže error 
    if ($_SESSION['logged_in'] == 1) {
      include "../php/prijavljen_navigacija.php";
    } else {
      include "../php/navigacija.php";
    }
  } else {
    include "../php/navigacija.php"; //če sejna spremenljivka logged in še ni določena potem uporabimo navadno navigacijo
  }
  ?>


  <img src="../slike_mokipedija/skupina_goril123.jpg" class="slika1" alt="Skupina goril" />
  <div class="info">
    <div class="infobox">
      <h2 class="title2">Informacije o opicah</h2>
      <p>
        Habitat, prehranjevanje, predatorji, evolucija in ostale splošne
        informacije o opicah
      </p>
      <a class="link1" href="informacije.php"> Preberi več...</a>
    </div>
    <div class="infobox">
      <h2 class="title2">Vrste opic</h2>
      <p>
        Predstavitev različnih vrst opic in njihove posebnosti (anatomija,
        hrana, evolucija, obnašanje)
      </p>
      <a class="link1" href="vrste.php"> Preberi več...</a>
    </div>
    <div class="infobox">
      <h2 class="title2">Zanimivosti</h2>
      <p>
        Zanimiva dejstva, specifične informacije o razičnih vrstah opic in
        predstavitve slavnih opic
      </p>
      <a class="link1" href="zanimivosti.php"> Preberi več...</a>
    </div>
    <div class="infobox">
      <h2 class="title2">Objave</h2>
      <p>
        Najnovejše novice, objave uporabnikov in članki iz področja
        primatologije
      </p>
      <a class="link1" href="objave.php"> Preberi več...</a>
    </div>
  </div>

  <h1 class="title1">Uvod v opice</h1>
  <div class="info1">
    <div>
      <p>
        Opice so raznolika skupina primatov, ki jih najdemo po vsem svetu.
        Znane so po svoji inteligenci, družabnosti in izjemnih prilagoditvenih
        sposobnostih. Opice so pogosto gibke in okretne ter se odlično
        prilagajajo različnim življenjskim okoljem, bodisi drevesom v tropskih
        gozdovih ali skalnatim terenom v gorah. Njihove dlake lahko variirajo
        v barvi, od svetlo rjave do črne, odvisno od vrste. Opice so znane
        tudi po svoji obrazni govorici, ki izraža njihova čustva in
        komunikacijske namene z drugimi člani svoje skupine. Poleg tega so
        nekatere vrste opic znane po svoji sposobnosti uporabe orodij, kar je
        redek pojav med živalmi. Zanimivo je tudi dejstvo, da so nekatere
        vrste opic tesno povezane z evolucijskim razvojem človeka in nam
        pomagajo razumeti naše lastne korenine.
      </p>
    </div>
    <div>
      <p>
        Človeku podobne opice kot
        so gorile in orangutani ter giboni. Imajo velike možgane, dolge okončine s prav takšnimi prsti, telo pa je poraščeno z dlako.
        V telesni zgradbi in po razumu so podobne ljudem. Z nami so tudi v tesnem sorodstvu.
        Njihovi bližnji sorodniki so zamorske mačke (Chlorocebus pygerythrus) (pavijani, makaki itd.) in vitkostase opice.
        Vse te opice so si po videzu podobne,
        le da so človeku podobne opice večje. Mala svinjačka tehta samo 150 g, odrasel gorilji samec pa tudi več kot 180 kg.
        Za vse opice je značilna okrogla glava s sploščenim obraznim delom. Uhlji so majhni, oči pa velike in usmerjene naprej.
        Prednje okončine so povsem podobne naši roki. Z njimi so zmožne močnega oprijema in natančnih gibov. Večina opic ima rep,
        ki jim pomaga loviti ravnotežje,
        ko se poganjajo z veje na vejo. Pri nekaterih vrstah je rep močan oprijemalen,
        človeku podobne opice pa so brezrepe. Opice uživajo različno hrano, med drugim tudi sadje, listje, žuželke in ptičja jajca.
      </p>
    </div>
  </div>
  <img src="../slike_mokipedija/opice1.jpg" class="slika1" alt="Skupina opic" />
  <div class="info9">
    <div>
      Lahko so zelo majhne živali ali zelo velike, odvisno od vrste. Hitro se lahko zapletajo v nevšečnosti, tako v ujetništvu kot
      v naravnem okolju.
      Imajo oči, usmerjene naprej, in ploske nosove. Prav tako imajo oprijemljive palce, ki jim pomagajo pri plezanju in premikanju.
      Imajo prste, ki so zelo podobno strukturirani kot pri ljudeh. Znano je, da uporabljajo tudi orodja, kot so palice in kamni.
      Lahko celo uporabljajo liste, da zajamejo vodo in pijejo. Opice so ljudem podobne na mnoge načine.
      Izražajo veliko enakih čustev znotraj svojih skupin, kot človeki. Lahko pokažejo ljubezen, jezo, žalost, žalujejo
      za izgubo ljubljenih in se celo smejijo. To dodatno kaže, da smo resnično močno povezani z vsemi vrstami primatov.
      Opice imajo možgane, ki so po velikosti proporcionalni glede na njihovo velikost, in to velik razlog, zakaj so tako inteligentne.
    </div>
    <div>
      Prihodnost je negotova za številne različne vrste opic. Kombinacija uničevanja njihovega habitata in izgube hrane ima
      globok vpliv na njihove populacije. Lovljenje in celo njihovo zadrževanje kot eksotičnih hišnih ljubljenčkov
      je prav tako povzročilo odstranitev mnogih mladičev iz njihovega naravnega okolja.
      Inteligenca opic jim omogoča, da so trenirane kot pomožne živali za starejše in invalide.
      Prav tako so bile del obsežnih programov usposabljanja, kot je potovanje v vesolje. Albert II je bil prvi sesalec (ne samo opica) v vesolju.
      Kljub močnim prizadevanjem za ohranjanje ni zagotovila, ali bodo mnoge različne vrste dobile potrebno pomoč za preživetje.
      V ujetništvu se zdi, da se opice dobro znajdejo. Zato so del mnogih živalskih vrtov in lokacij za ohranjanje. Programi
      razmnoževanja, so prav tako del prizadevanj za ohranjanje številnih vrst.
    </div>
  </div>
</body>

</html>