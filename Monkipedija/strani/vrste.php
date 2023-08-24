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

  <h1 class="title5">Pregled</h1>
  <div class="info2">
    <div>
      Obstaja več kot 260 vrst opic, ki jih danes najdemo po svetu. Izvirajo iz zgodnjih primatov in
      so se razvile v raznolike oblike in velikosti,
      prilagodile pa so se različnim okoljem in načinom življenja.


      Ti primati se razlikujejo po velikosti, in sicer od približno 100 gramov do tistih, ki tehtajo do 200 kilogramov.
      Ni popolnoma razumljeno, kaj se je vse zgodilo pri evoluciji, da so se te opice razvejale v toliko smeri.
      Kljub temu obstaja veliko informacij, ki kažejo, da so bili prisotni že več kot 50 milijonov let v nekem obsegu.
    </div>
  </div>
  <h2 class="title3">Vrste Opic</h2>

  <div class="info3">
    <div>
      <h1 class="title4">Šimpanz</h1>
      <img src="../slike_mokipedija\simpanz.jpg" alt="šimpanz" class="slika3" />
      <p>
        Šimpanzi (znanstveno ime Pan) so rod opic iz družine človečnjakov. Rod sestavljata dve vrsti:
        na bolj znanega navadnega šimpanza in na pritlikavega šimpanza ali bonoba;
        mejo med obema vrstama predstavlja reka Kongo.
      </p>
      <a href="../strani_vrst/simpanz.php">Več informacij</a>
    </div>

    <div>
      <h1 class="title4">Gorila</h1>
      <img src="../slike_mokipedija\gorile.jpg" alt="gorila" class="slika3" />
      <p>
        Z dvema metroma višine so gorile največje opice. Če niso vznemirjene, so to počasne in ljubeznive živali.
        Večino časa porabijo za počitek ali pa prehranjevanje z listi in poganjki.
        Živijo v majhnih skupinah, ki se počasi pomikajo skozi gozd.
      </p>
      <a href="../strani_vrst/gorila.php">Več informacij</a>
    </div>

    <div>
      <h1 class="title4">Pajkovska opica</h1>
      <img src="../slike_mokipedija\spider_monkey.jpg" alt="pajkovska opica" class="slika3" />
      <p>
        Poznanih je 7 podvrst pajkovske opice. Spadajo v razred opic novega sveta. Verjame se,
        da so največje med vsemi vrstami opic iz razreda novega sveta.
      </p>
      <a href="../strani_vrst/pajkova.php">Več informacij</a>
    </div>

    <div>
      <h1 class="title4">Orangutan</h1>
      <img src="../slike_mokipedija\orangutan.jpg" alt="orangutan" class="slika3" />
      <p>
        Živahno obarvani orangutan živi v gozdovih Bornea, Sumatre in Jugovzhodne Azije. Večino
        življenja preživi visoko v drevju,
        kjer išče sadje, poganjke, liste in žuželke. Je samotar, razen v času razmnoževanja.
      </p>
      <a href="../strani_vrst/orangutan.php">Več informacij</a>
    </div>
    <div>
      <h1 class="title4">Veveričarka</h1>
      <img src="../slike_mokipedija\squirrel_monkey.jpg" alt="veveričarka" class="slika3" />
      <p>
        Navadna veveričja opica je je dobila ime po tem, ker spominja na veverico.
        Spada med opice novega sveta. Navadno veveričjo opico najdemo v tropskih regijah Južne Amerike.
      </p>
      <a href="../strani_vrst/vevericarka.php">Več informacij</a>
    </div>
    <div>
      <h1 class="title4">Vervet</h1>
      <img src="../slike_mokipedija\vervet.jpg" alt="vervet" class="slika3" />
      <p>
        Vervet opica spada v kategorijo starega sveta. Identificiranih je 5 znanih podvrst.
        Imajo zelo edinstven videz, ki jih ločuje od drugih vrst opic, ki jih najdemo po svetu.
      </p>
      <a href="../strani_vrst/vervet.php">Več informacij</a>
    </div>

    <div>
      <h1 class="title4">Rilčar</h1>
      <img src="../slike_mokipedija\rilcar.jpg" alt="rilčar" class="slika3" />
      <p>
        Spada v klasifikacijo Starega sveta.
        V egipčanski kulturi so bili čaščeni kot zelo edinstvena žival in so veljali za posebne bogovom.
      </p>
      <a href="../strani_vrst/rilcar.php">Več informacij</a>
    </div>


    <div>
      <h1 class="title4">Navadna marmozetka</h1>
      <img src="../slike_mokipedija\marmozetka.jpg" alt="marmozetka" class="slika3" />
      <p>
        Navadna marmozetka je zelo drugačna vrsta opic.
        Njem edinstven fizični videz se zelo razlikuje med vrstami mermozetk.
        Imajo sivo telo in ko odrastejo, razvijejo bele kitke, ki se raztezajo iz strani obraza.
      </p>
      <a href="../strani_vrst/marmozetka.php">Več informacij</a>
    </div>

    <div>
      <h1 class="title4">Gibon</h1>
      <img src="../slike_mokipedija\gibon.jpg" alt="gibon" class="slika3" />
      <p>
        Giboni (znanstveno ime Hylobatidae) so brezrepe opice z dolgimi rokami.
        So najmlajši predstavniki skupine brezrepih opic.
      </p>
      <a href="../strani_vrst/gibon.php">Več informacij</a>
    </div>


    <div>
      <h1 class="title4">Rdečelični makak</h1>
      <img src="../slike_mokipedija\makak.jpg" alt="makak" class="slika3" />
      <p>
        Japonskega makaka imenujemo tudi snežna opica. Spada v vrsto starega sveta. Identificirani sta bili dve podvrsti.
        Imel je ključno vlogo v zgodnjem budističnem verovanju.
      </p>
      <a href="../strani_vrst/makak.php">Več informacij</a>
    </div>


    <div>
      <h1 class="title4">Pavijan</h1>
      <img src="../slike_mokipedija\pavijan.jpg" alt="pavijan" class="slika3" />
      <p>
        Z pavijani si ljudi delimo 91% DNK. Ta posebna opica je pogosto
        obravnavana kot mala opica, vendar zaradi različnih dejavnikov se uvršča med male opice.
      </p>
      <a href="../strani_vrst/pavijan.php">Več informacij</a>
    </div>

    <div>
      <h1 class="title4">Mandril</h1>
      <img src="../slike_mokipedija\mandril.jpg" alt="mandril" class="slika3" />
      <p>
        Mandril je velika opica starega sveta, ki izvira iz zahodne osrednje Afrike.
        Je eden najbolj barvitih sesalcev na svetu, z rdečo in modro kožo na obrazu in zadku.
      </p>
      <a href="../strani_vrst/mandril.php">Več informacij</a>
    </div>
  </div>
</body>

</html>