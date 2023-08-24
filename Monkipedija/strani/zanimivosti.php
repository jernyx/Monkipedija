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
    include "../php/navigacija.php"; //če sejna spremenljivka logged in še ni določena potem uporabimo navadno navigacijo, da ne pokaže error: variable "logged in" not defined
  }
  ?>


  <h1 class="title13">Slavne opice</h1>
  <div class="info12">
    <div>
      <h1 class="title4" style="text-align:center;">Harambe</h1>
      <img src="../slike_mokipedija\harambe.jpg" alt="harambe" style="margin-left:25%;" class="slika3" />
      <p>Harambe ( 27. maj 1999 – 28. maj 2016) je bila zahodnoafriška nizkogorska gorila, ki je živela
        v živalskem vrtu Cincinnati. 28. maja 2016 je tri leta star deček splezal v ogrado za
        gorile, kjer ga je zgrabil in
        povlekel Harambe. Zaradi strahu za dečkovo
        življenje je delavec živalskega vrta ustrelil in ubil Harambeja. Dogodek je bil posnet
        na videu, deležen široke mednarodne pozornosti. Številni primatologi in naravovarstveniki so
        kasneje zapisali, da živalski vrt v teh okoliščinah ni imel druge izbire.
        Harambe je postal
        internetnia senzacija in predmet pesmi, video igre, kipa in drugih počastitev ter priznanj.</p>

    </div>
    <div>
      <h1 class="title4" style="text-align:center;">Gorila Koko</h1>
      <img src="../slike_mokipedija\koko.jpg" alt="koko" style="margin-left:25%;" class="slika3" />
      <p>Koko je imela aktivni besednjak z več kot 1000 znaki znakovnega jezika. Njena skrbnica
        Patterson je Koko izpostavljala govorjenemu
        angleškemu jeziku že od zgodnjega otroštva.
        Koko je razumela približno 2000 besed govorjenega angleškega jezika.
        Pravijo, da je Koko razumela samostalnike, glagole in pridevnike, vključno z abstraktnimi koncepti,
        kot so "dobro" in "lažno", ter je znala postavljati preprosta vprašanja. Splošno je sprejeto, da ni
        uporabljala sintakse ali slovnice ter da njena raba jezika ni presegala tiste pri
        otroku. Kljub temu pa je dosegla ocene med 70
        in 90 na lestvici IQ za merjenje inteligence dojenčkov.</p>
    </div>
    <div>
      <h1 class="title4" style="text-align:center;">Albert II</h1>
      <img src="../slike_mokipedija\albert.jpg" alt="albert" style="margin-left:25%;" class="slika3" />
      <p>
        Albert II, samček močvirskih makakov, je bil prvi primat in prvi sesalec v vesolju.
        Poletel je iz zračne vojašnice Holloman v Novi Mehiki, Združene države Amerike, do
        višine 134 km z raketo U.S. V-2 14. junija 1949. Albert je umrl med ponovnim vstopom
        v atmosfero, saj je okvara padala povzročila, da je njegova kapsula trčila ob tla s
        visoko hitrostjo.
        Albertovi dihalni in srčnožilni
        podatki so bili beleženi vse do trenutka trka.</p>
    </div>
    <div>
      <h1 class="title4" style="text-align:center;">Brezdlaki šimpanz Mongo</h1>
      <img src="../slike_mokipedija\dlaka.jpg" alt="mongo" style="margin-left:25%;" class="slika3" />
      <p>
        Mongo, star 22 let se je nahajal v živalskem vrtu Twycross v Združenih državah Amerike
        Imel je alopecijo in 2016 je bil zdravljen zaradi okužbe, ki jo je staknil med
        rutinskim zdravstvenim pregledom, vendar se ni zbudil iz anestezije.
        Slike in videoposnetki njegovega posebnega videza se po internetu širijo še danes.</p>
    </div>
    <div>
      <h1 class="title4" style="text-align:center;">Oliver</h1>
      <img src="../slike_mokipedija\oliver.jpg" alt="oliver" style="margin-left:25%;" class="slika3" />
      <p>
        Oliver (1957 - 2. junij 2012) je bil nekdanji nastopajoči šimpanz , ki so ga predstavljali kot
        človeku podobnega šimpanza zaradi njegove nekoliko človeku podobne
        zunanjosti in nagnjenosti k hoji pokonci.
        Kljub njegovi nekoliko nenavadni zunanjosti in vedenju so znanstveniki ugotovili, da Oliver
        ni hibrid med človekom in šimpanzom. Ujet je bil v Kongu.
      </p>
    </div>
    <div>
      <h1 class="title4" style="text-align:center;">Stric Debeli</h1>
      <img src="../slike_mokipedija\stric.jpg" alt="stric" style="margin-left:25%;" class="slika3" />
      <p>

        "Stric Debeli" je hudo predebela opica iz Tajske, ki se je prenajedala s hitro hrano in
        gaziranimi pijačami, ki so jih za seboj pustili turisti.
        Kot vodja svoje črede ima podrejene opice, ki mu prinašajo dobrote. Njegova izmejena teža je bila 27kg, štirikrat
        več kot teža njegovega povprečnega sovrstnika.
      </p>
    </div>

    <div>
      <h1 class="title4" style="text-align:center;">Nim Chimpsky</h1>
      <img src="../slike_mokipedija\nim.jpg" alt="nim" style="margin-left:25%;" class="slika3" />
      <p>

        Neam "Nim" Chimpsky[1] (19. november 1973 - 10. marec 2000) je bil šimpanz in predmet
        podrobne raziskave pridobivanja jezika pri živalih na Univerzi Columbia.
        V okviru znanstvene raziskave je bil šimpanz poimenovan kot besedna igra z
        imenom lingvista na "Noam Chomsky", ki trdi, da so ljudje "žično povezani" ob rojstvu za razvoj jezika.
        Po pregledu rezultatov raziskave so sklenili, da je Nim
        posnemal simbole znakovnega
        jezika, da bi dobil nagrado, vendar jezik ni razumel in ni mogel tvoriti stavkov.
      </p>
    </div>

    <div>
      <h1 class="title4" style="text-align:center;">Gospodična Baker</h1>
      <img src="../slike_mokipedija\baker.jpg" alt="nim" style="margin-left:25%;" class="slika3" />
      <p>


        Miss Baker (1957 - 29. november 1984) je bila vevričarka, ki je leta 1959 postala
        prva žival izstreljena v vesolje, ki se je varno vrnila nazaj. Živela je še 25 let
        po pristanku iz vesolja.

        Gospodična Baker je nosila čelado, obloženo z gumo, poleg
        tega pa tudi jakno za izstrelitev. Na nosu je imela pritrjen dihalni
        merilnik in nameščena je bila v tesno kapsulo velikosti čevljev.

      </p>
    </div>

  </div>
  <h1 class="title12">17 Zanimivih dejstev o opicah</h1>
  <div class="info11">
    <ol>
      <li>Največje vrsta primatov je bila izumrla vrsta Gigantopithecus blacki, ki je živela od 2 miljona do 350 tisoč let nazaj,
        katere samci so bili visoki do
        4 metre in tehtali do 400kg</li>
      <li>Glede na razultate številnih raziskav, velja da so oragutani najpametnejše živali, pametnejši od delfinov, goril in šimpanzov</li>
      <li>Moč gorile je približno desetkrat večja od njene teže, moč odraslega samca
        je večja kot moč desetih človeških bitij. Na klopi lahko gorila dvigne 2000 kg,
        medtem ko je človeški svetovni rekord 635kg</li>
      <li>V raziskavi 2021 je bilo ugotovljeno, da lahko opica vrste Rezus lahko šteje od 1 do 6</li>
      <li>Mandrilovi čekani so daljši, kot levji</li>
      <li>Šimpanzi imajo mnogo boljši fotografski spomin, kot ljudje. Lahko si zapomnejo točno pozicijo za pol sekunde na ekranu
        prikazanih 20 števil</li>
      <li>Najhitrejša opica na svetu je opica patas. Lahko doseže hitrosti do 55 km/h.</li>
      <li>2017 sta bila Zhongzhong in Huahua prva primata, ki sta bila klonirana z istim postopkom,
        kot je bil uporabljen za kloniranje ovce Dolly.</li>
      <li>Italijanski profesor Sergio Canavero trdi je izvedel prvo presaditev opičje glave brez
        nobene nevrološke poškodbe živali. Vendar ni povezal hrbtenjače, zato je bila opica popolnoma paralizirana.
        Žival je bila po posegu zaradi etičnih razlogov ohranjena živa le 20 ur.</li>
      <li>Opice so najdene skoraj povsod po Zemlji, razen v Avstraliji in Antarktiki. V evropi je samo ena vrsta opice (
        Barbarski makaki)</li>
      <li>Znanstveno ime za gorilo je Gorilla gorilla gorilla.</li>
      <li>Nasprotno od splošnega mnenja, ljudje ne izhajamo iz opic. Ljudje in opice imajo
        skupnega prednika, ki je živel pred 25-30 milijoni let, nato pa sta se človek in
        opica iz tega skupnega prednika razvijala na različne načine.</li>
      <li>Japonska makakija je najsevernje živeča opica in je sposobna preživeti v snegu in temperaturam nižjih od -15
        stoping Celzija</li>
      <li>Samček hujskaške opice ima najglasnejši klic med vsemi primati ter spada med ene najglasnejših živali na svetu.
        Zanimivo, glasnejša
        ko je hujskaška opica, manjše so njegova moda </li>
      <li>Ko so raziskovalci v 1940-ih letih japonskim makakijem ponudili sladki krompir med raziskavami,
        opice niso marale okusa umazanije na zelenjavi, zato so jo očistile. Sedaj, generacije pozneje, se
        je umivanje hrane spremenilo v naučeno vedenje. Ni znano,
        da bi katera koli druga opica na svetu umivala hrano pred zaužitjem.</li>
      <li>Nedavno odkrita opica, burmanska opica, kihne vsakič, ko dežuje.</li>
      <li>Odrasle opice lahko živijo med 10 in 50 let.</li>
    </ol>
  </div>
</body>

</html>