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

  <h1 class="title6">Splošne informacije o opicah</h1>
  <img src="../slike_mokipedija/opice2.png" style="width:60%; margin-left:20%" alt="Skupina opic" />
  <div class="kazalo">
    <a href="#habitat" style="color: rgb(210, 210, 210);">Habitat</a>
    <a href="#anatomija" style="color: rgb(210, 210, 210);">Anatomija</a>
    <a href="#prehrana" style="color: rgb(210, 210, 210);">Prehrana</a>
    <a href="#predatorji" style="color: rgb(210, 210, 210);">Predatorji</a>
    <a href="#evolucija" style="color: rgb(210, 210, 210);">Evolucija</a>
  </div>
  <h1 class="title11" id="habitat">Habitat</h1>
  <div class="info1">
    <div>
      <p>
        Habitati opic so izjemno raznoliki in zajemajo širok spekter okolij po vsem svetu.
        Te inteligentne in prilagodljive živali se lahko naseljujejo v različnih habitatskih območjih,
        kar jim omogoča, da preživijo in uspevajo v različnih življenjskih razmerah. Drevesa igrajo ključno
        vlogo v habitatih večine vrst opic. Gozdna območja, vključno s tropskimi in subtropskimi gozdovi ter
        deževnimi gozdovi, so zanje posebno pomembna.
        V teh gozdovih opice najdejo obilico zavetja, hrane in vodnih virov. Drevesne veje jim omogočajo
        edinstven način gibanja, pri čemer uporabljajo njihovo močno mišično strukturo, da se prepletajo med
        vejami in raziskujejo svoj habitat. Prav tako jim drevesa nudijo varnost pred plenilci ter idealno okolje
        za vzrejo in skrb za mladiče.
        Poleg gozdov se opice naseljujejo tudi v drugih
        okoljih. Na primer, nekatere vrste opic so se prilagodile
        življenju v savanah, kjer se pogosto spopadajo z drugimi živalmi za hrano
        in zavetje. Te odprte pokrajine jim nudijo drugačne izzive in možnosti za preživetje,
        pri čemer so prisiljene razvijati nove strategije za iskanje hrane in izogibanje nevarnostim.
        Poleg tega se nekatere vrste opic naseljujejo v goratih območjih, kjer se soočajo z različnimi
        nadmorskimi višinami, temperaturami in tereni. Njihova sposobnost prilagajanja različnim višinskim
        pasovom je ključna za preživetje v teh zahtevnih okoljih.
        Drevesa niso le zatočišče in vir hrane, ampak imajo tudi ključno vlogo pri razmnoževanju in razširjanju
        rastlinskih vrst. Opice igrajo pomembno vlogo v ekosistemu kot raznašalci semen. Med iskanjem hrane na drevesih
        in tleh raznašajo semena različnih rastlinskih vrst. Ta proces prispeva k raznolikosti rastlinskega življenja v
        okolju in ohranja ravnovesje ekosistema. S svojim vedenjem in gibanjem opice spodbujajo naravno razmnoževanje rastlin
        ter prispevajo k ohranjanju habitatov.
        Habitati opic so se skozi čas spreminjali in razvijali. Nenehne spremembe v
        okolju, vključno s podnebnimi spremembami, so vplivale na njihove življenjske razmere.
        Toda opice so se izkazale za izjemno prilagodljive, saj so razvile različne strategije za preživetje.
        Nekatere vrste so se prilagodile spremenjenim razmeram in se preusmerile v nove habitate, kjer so našle
        ustrezne vire hrane in zatočišče. Ta sposobnost prilagajanja je ključna za preživetje opic v spreminjajočem se svetu.
      </p>
    </div>
    <div>
      <img src="../slike_mokipedija/habitat.jpg" alt="Opica na drevesu" style="margin-top:150px; margin-left:70px;width: 400px;
    height: auto;" />
    </div>
  </div>



  <h1 class="title11" id="anatomija">Anatomija</h1>
  <div class="info1">
    <div>
      <p>
        Opice Imajo telesa, ki so zasnovana tako, da jim zagotavljajo moč in gibčnost. So prožne in hitre, kar
        jim omogoča, da se umaknejo plenilcem in uspevajo v svojem
        naravnem okolju. V mnogih pogledih je telo opice zelo podobno človeškemu.

        Vse opice imajo prstne odtise, enako kot ljudje, in so edinstveni. Imajo dolge noge in roke, ki so gibčne,
        tako da se lahko z njimi vzpenjajo. Vendar vse opice ne visijo po drevesih, kot mnogi verjamejo.
        To zmorejo samo večje
        opice zaradi načina, kako so oblikovane njihove ramenske mišice. Imajo tudi oprijemljivi palec,
        ki ga uporabljajo
        na enak način kot ljudje. Oprijemljiv palec imajo na rokah in nogah, medtem ko ga ljudje imajo samo na roki .
        Lahko lupijo sadje,
        pobirajo predmete in jih uporabljajo za urejanje svojega izgleda. Nekateri mladiči so bili celo opaženi,
        da sesajo palce,
        podobno kot to počnejo dojenčki.

        Opice imajo dober vid s spredaj obrnjenimi očmi. Pogosto pravijo, da so zelo podobne človeškim očem.
        Nekatere vrste opic vidijo barve, večina pa
        vidi le črno-belo.

        Imajo ploske nosove, vendar nosnice so lahko bodisi ozke bodisi široke, odvisno od specifične vrste. Imajo dober
        vonj, kar jim omogoča, da se prepoznajo med sabo. Dober vonj jim omogoča zaznavanje
        morebitnih groženj v okolici.

        Opice imajo odličen sluh. Glede na vrsto opice so lahko ušesa zelo majhna ali zelo velika.
        Nahajajo se ob strani obraza, vendar jih ne morejo premikati brez obračanja celotne glave.

        Vse male opice imajo rep, kar je del tega, kar jih ločuje od ljudi in velikih opic. Ti repi se uporabljajo za
        ravnotežje, zaradi česar so tako dolgi. Prav tako uporabljajo rep za skakanje navpično in za obešanje
        na glavo na drevesnih vejah. Lahko tudi pobirajo predmete z repom, vendar je to odvisno od vrste.

        Vse opice so prekrite z dlako. Vendar pa nimajo dlake na obrazu in rokah. Imajo sapnik, podoben ljudem,
        ki jim pomaga pri izdajanju zvokov. Prav tako prenaša zrak do pljuč.

        Možgani malih opic so zelo visoko razviti, dejansko bolj kot možgani nekaterih velikih opic.
        Imajo zobno strukturo, ki je zelo podobna človeški.
      </p>
    </div>
    <div>
      <img src="../slike_mokipedija/anatomija.jpg" alt="Anatomija" style="margin-top:100px; margin-left:80px;" />
    </div>
  </div>


  <h1 class="title11" id="prehrana">Prehrana</h1>
  <div class="info1">
    <div>
      <p>
        Za večino opic je sadje osnovna hrana. V gozdovih, kjer živijo,
        je na stotine vrst sadja. Vendar je to sadje običajno sezonsko, zato se premikajo po svojem domačem habitatu, da ga najdejo. Znajo izračunati, kaj bo v določenih časih leta lahko dostopno.

        Pogosto tudi raznašajo semena iz sadja, medtem ko se premikajo.
        To je del razloga, zakaj so opice tako pomembne za habitat.
        Raznašanje semen pomaga zagotoviti, da bo lahko prihodnja vegetacija rasla.
        Rastline in listi so tudi povsod po njihovih območjih. Jedli jih bodo, ko ne morejo
        najti sadja. Veje in suha skorja so lahko prav tako del prehrane. Večina vrst opic pa počaka
        do sušne sezone, ko druge vire hrane izginejo. Veliko dreves ima smolo, s čemer se tudi nekatere
        opice prehranjujejo. Med potovanjem lahko najdejo tudi cvetove, ki jih nato zaužijejo.

        Hrana za opice lahko vključuje tudi žuželke.
        Pri nekaterih vrstah obstajajo določeni časi, ko se bodo prehranjevale izključno z žuželkami
        več mesecev. Prehrana je tudi zelo pomemben vidik socialnega življenja opic. Ko je hrane v izobilju,
        so običajno plašne in se dobro razumejo znotraj svojih skupin. Pomanjkanje hrane pa lahko povzroči
        visoko stopnjo stresa.

        Včasih se lahko večje skupine razdelijo na manjše. To jim omogoča, da se odpravijo ven in poiščejo hrano,
        da preživijo. Nekatere opice se lahko spustijo na tla in jedo zemljo, če zanje ni ničesar drugega za zaužitje.
        Tudi parjenje se lahko ustavi, če ni dovolj hrane.

        Materam je treba zagotoviti dovolj hrane, da lahko njihova telesa proizvajajo mleko za mladiče. Trajanje
        tega načina prehranjevanja je odvisno od vrste. Pri nekaterih traja nekaj tednov, pri drugih pa več kot eno leto.
        Podobno kot pri človeških otrocih se bodo postopoma uvajale majhne količine trde hrane, dokler ne bodo popolnoma
        odklonjene od matičnega mleka.

        Nekatere vrste opic znajo uporabljati orodja, kot so palice in kamni, ki jim pomagajo pri prehranjevanju.
        Zdrobijo lupine morskih sadežev in nekaterih vretenčarjev. Palice lahko uporabijo tudi za dostop do virov
        hrane, kot so mravlje ali termiti, ki so znotraj dreves.

        Večino vode opice zaužijejo s hrano. Sadje in listi, ki jih jedo v naravnem okolju, vsebujejo veliko vode.
        Vendar pa so nekatere vrste znane, da pijejo vodo iz rek in potokov.

        Vendar je ne pijejo tako kot večina živali. Namesto da bi jo oblizovali s svojim jezikom, jo zajamejo
        v svojo roko in naredijo skodelico. Pogosto uporabljajo tudi velike liste in jih prepognejo, da ustvarijo
        skodelico, iz katere lahko pijejo. V divjini so opice zelo ustvarjalne, ko gre za zadovoljevanje svojih
        prehranskih potreb.
      </p>
    </div>
    <div>
      <img src="../slike_mokipedija/prehrana.jpg" alt="Opica na drevesu" style="margin-top:170px; margin-left:90px;" />
    </div>
  </div>

  <h1 class="title11" id="predatorji">Predatorji</h1>
  <div class="info1">
    <div>
      <p>
        Človek je največja grožnja prihodnosti mnogih vrst opic.
        Zemlja, kjer te živali živijo, se nenehno uničuje zaradi sečnje in
        odstranjevanja dreves za pridelavo hrane. V nekaterih kulturah opice ubijejo,
        da lahko uporabijo dele njihovega telesa za izdelavo zdravil.

        Veliko vrst opic je zelo majhnih, kar jih naredi za odličen obrok za različne vrste ptic.
        Te ptice se lahko zlahka povzpnejo na drevesa, kjer so bivališča opic.
        V nekaj sekundah se lahko spustijo s močnimi kremplji in jih odnesejo.
        Imajo neverjeten vid, ki jim pomaga najti plen tudi v krošnji gozda.

        Različne vrste mačk živijo na istih mestih kot nekatere opice. Ker se lahko
        premikajo po kopnem in drevesih z lahkoto so odlične lovke opic.
        Večinoma iščejo mlajše opice, ki so se morda oddaljile od svojih mater.
        Te mačke se ne bojijo napasti niti večjih opic. Tudi hijene lahko predstavljajo
        težavo za opice na nekaterih območjih. Niso tako vešče v lovjenju, vendar pogosto lovijo
        v skupinah, kar jim večinoma daje prednost. Tudi druge vrste primatov, vključno s šimpanzi,
        lahko uživajo nekatere vrste opic.

        Ker se redne vire hrane za mnoge od teh živali nenehno izčrpava,
        vedno več požrešnih plenilcev poje opice. Na nekaterih območjih se poti
        takih plenilcev nikoli niso prekrivale z opicami. To se je vendarle spremenilo
        zaradi uničevanja ali fragmentacije habitatov. To povzroči, da so različne živaku
        zunaj svojega naravnega okolja v divjini.

        Nekatere vrste opic rade preživljajo čas v vodi. Morda prečkajo reke ali se preprosto
        kopajo v njih. To jih lahko naredi ranljive za krokodile in aligatorje, ki se nahajajo v
        istih rekah in potokih. Ti plenilci se pogosto dobro skrivajo v vodi, tako da se zlijejo s
        okolico. To lahko opicam oteži zaznavanje nevarnosti pravočasno.
      </p>
    </div>
    <div>
      <img src="../slike_mokipedija/predatorji.jpg" alt="Opica na drevesu" style="margin-top:100px; margin-left:80px;" />
    </div>
  </div>

  <h1 class="title11" id="evolucija">Evolucija</h1>
  <div class="info1" style="padding-bottom:100px;">
    <div>
      <p>
        Kadar pride v ospredje tema evolucije opic, se vedno znova pojavi razprava o Darwinovi teoriji.
        Ali smo tako tesno povezani s primati, da smo se od njih odcepili? Obstaja veliko genetskih dokazov,
        ki kažejo, da smo genetsko zelo tesno povezani z opicami. Koliko časa so opice že na Zemlji, ni znano,
        vendar je zagotovo več milijonov let.

        Je dovolj informacij, da jih razdelimo na dve ločeni skupini - opice novega sveta in opice starega sveta.
        Kot že ime pove, tiste, ki so se sčasoma spremenile in razvejale v nove vrste, so opice novega sveta.
        Morda imajo nekatere podobnosti s tistimi iz starega sveta, vendar obstajajo dovoljše razlike, da se jih razvrsti tako.

        Evolucija opic bi lahko bila posledica sprememb okolja. Morda so bile nekoč vse zelo velike, podobno kot
        današnje velike opice. Vendar so morale biti sposobne jesti hrano, ki je bila višje v drevesih. Sčasoma so
        postajale manjše in veliko od njih je lahko živelo le še v drevesih. Tam so lahko našle hrano,
        zavetje in zaščito pred plenilci. Največje vrsta primatov je bila izumrla vrsta Gigantopithecus blacki,
        katere samci so bili visoki do 4 metre in tehtali do 400kg.

        Obstajajo opice, ki imajo zelo edinstvene značilnosti. Verjame se, da je to dodaten vtis evolucije.
        Sposobne so bile nadaljevati s prilagajanjem in spreminjanjem svojega okolja za ultimativno preživetje.
        Dejstvo, da so opice izjemno inteligentne, je del tega procesa spreminjanja.

        Verjame se, da imajo sposobnost reševanja problemov. Zato so lahko spoznale, ko dano okolje ne
        more zadostiti njihovim zahtevam. Namesto da bi se pustile izumreti, so naredile spremembe.
        Preselile so se na nova območja in uživale drugačno hrano.

        Nekatere vrste opic so se celo naučile plavati. To jim je omogočilo, da so prečkale vodne površine,
        da bi našle hrano. Voda jim je tudi služila kot sredstvo, s katerim so se lahko hitro umaknile pred
        morebitnimi plenilci.

        Opazovanje opic z njihovimi mladiči je fascinantna izkušnja. Lahko vidimo, kako podobni so mnogi
        njihovi načini skrbi za mladiče v primerjavi z ljudmi. Povežejo se z mladiči in jih držijo blizu sebe.
        Negujejo jih in skrbijo zanje. Opice so prav tako primati z mnogimi čustvi. Znajo izkazovati žalost,
        jezo, srečo in še več. To bi lahko bil del evolucijskega procesa, skozi katerega so šli vsi primati.
      </p>
    </div>
    <div>
      <img src="../slike_mokipedija/evolucija.jpg" alt="Opica na drevesu" style="margin-top:150px; margin-left:110px;" />
    </div>
  </div>

</body>

</html>