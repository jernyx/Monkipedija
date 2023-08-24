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

    <h1 class="title6" style="margin-bottom: 0px; font-size: 27px;">Mandril</h1>
    <img src="../slike_mokipedija\mandril.jpg" alt="mandril" style="margin-left:27%; margin-top:30px;" />
    </div>
    <div class="info1" style="margin-top: 0px;">
        <div>
            <h1 class="title11" id="habitat">Habitat</h1>
            <p>
                Deževni gozdovi predstavljajo pomemben del habitata mandrila. V teh
                gostih in bujnih gozdovih se gibljejo med gosto vegetacijo, kar jim omogoča
                zaščito pred plenilci in dostop do različnih virov hrane.
                Mandrili se prehranjujejo z raznoliko rastlinsko hrano, kot so plodovi, semena,
                listi, cvetovi in lubje, ki jih najdejo v deževnem gozdu.

                Suhi gozdovi so tudi del njihovega habitatnega razpona. V teh bolj odprtih gozdovih
                imajo mandrili drugačne možnosti za iskanje hrane in družbeno interakcijo. V suhih obdobjih
                se morda bolj osredotočijo na višje rastline in plodove, ki so bolj odporni na suše.

                Obrežja rek in mangrovi so prav tako pomemben habitat za mandrile. V teh okoljih lahko najdejo
                različne vodne vire in prehranjevalne možnosti, kot so ribe, rakci in drugi vodni organizmi.
                Mandrili so znani po svoji sposobnosti plavanja in loviti hrano v vodi.

                Poleg tega so mandrili prilagodili tudi svoj način življenja gorskim regijam. V goratih habitatih
                se gibljejo po skalnatih pobočjih, kjer iskanje hrane zahteva večjo vzdržljivost in spretnost. V
                teh regijah se prilagodijo tudi nižjim temperaturam in drugim izzivom visokogorskega okolja.

                Družbeno vedenje mandrilov je prav tako pomembno za njihov habitat. Živijo v večjih skupinah, ki
                vključujejo več samcev, samic in mladičev. Ta družbena dinamika omogoča večje število oči za opazovanje
                plenilcev, boljšo zaščito pred nevarnostmi ter medsebojno pomoč pri iskanju hrane.
            </p>
        </div>
        <div>
            <h1 class="title11" id="anatomija">Anatomija</h1>
            <p>
                Ena od značilnosti mandrilov je njihova izrazita spolna dimorfizma, kar pomeni, da so samci
                in samice različnih velikosti in imajo različne fizične značilnosti. Samci so običajno večji
                in težji od samic. Odrasli samci imajo tudi značilne modro-rdeče obraze in svetlo modro
                kožo okrog spolnih organov, medtem ko so samice manj izrazito obarvane.

                Mandrili imajo močne okončine, ki so prilagojene za premikanje po drevesih in tleh. Zadnje okončine so
                posebej močne in mišičaste, kar jim omogoča skakanje in premikanje po različnih terenih. Na svojih
                zadnjih nogah se lahko postavijo pokonci, kar jim omogoča boljši pregled okolja in komunikacijo znotraj
                skupine.

                Mandrili imajo izrazito močno čeljust, ki jim omogoča prehranjevanje z različnimi vrstami hrane. Imajo
                očesače in sekutiče za žvečenje rastlinske hrane ter ostrije, rezalne zobe za prehranjevanje z mesom in
                trdo hrano. Njihova prehrana vključuje plodove, liste, semena, korenine in tudi živalsko hrano, kot so
                žuželke in majhni vretenčarji.

                Mandrili imajo tudi dobro razvit vid, kar je pomembno za zaznavanje plenilcev in komunikacijo znotraj
                skupine. Imajo velike oči, ki so prilagojene za dnevno aktivnost in zaznavanje gibanja v gozdnem okolju.
                Njihov izrazit obraz, vključno s svetlim območjem okrog oči, igra tudi vlogo pri komunikaciji in
                prepoznavanju posameznikov.
            </p>
        </div>
    </div>


    <div class="info1">
        <div>
            <h1 class="title11" id="prehrana">Prehrana</h1>
            <p>
                Rastlinska hrana predstavlja pomemben del prehrane mandrilov. Prehranjujejo se z različnimi vrstami plodov,
                kot so sadje, semena, jagode in druge rastlinske organske snovi. Pogosto se gibljejo med drevesi, da bi
                našli zrele plodove, ki jih lahko zaužijejo.
                Rastlinska hrana zagotavlja pomembne hranilne snovi, vlaknine in energijo za njihovo aktivno življenje.

                Poleg rastlinske hrane mandrili tudi vključujejo živalsko hrano v svojo prehrano.
                To vključuje različne vrste
                žuželk, kot so mravlje, termite, črvi in pajki ter druge majhne vretenčarje.
                Lovijo tudi manjše živali, kot so ptice, ptice roparice in njihova jajca. Za pridobivanje
                te vrste hrane uporabljajo svojo dobro razvito čeljust in ostre zobe, prilagojene za
                raztrganje mesa.

                Mandrili so tudi znani po svoji sposobnosti uporabe orodij pri prehranjevanju. Na primer,
                lahko uporabljajo vejice ali kamne za lupljenje lupine s plodov ali za izkopavanje korenin
                iz zemlje. Ta sposobnost kaže na njihovo inteligenco in prilagodljivost pri izkoriščanju
                različnih virov hrane.

                Družbeni vidik prehranjevanja mandrilov je prav tako pomemben. Živijo v večjih skupinah,
                znanih kot tropi, ki vključujejo več samcev, samic in mladičev. Vodja skupine, alfa samec,
                ima običajno prednost pri izbiri hrane, vendar mora zagotoviti tudi varnost in stabilnost skupine.
                Hierarhija znotraj skupine ureja, kateri posamezniki imajo prednost pri dostopu do hrane.
            </p>
        </div>
        <div style="margin-bottom:100px;">
            <h1 class="title11" id="predatorji">Predatorji</h1>
            <p>
                Ena od glavnih groženj za mandrile so velike zveri, kot so leopardi, leopardji
                psi in divji psi. Te plenilce privlačijo predvsem mladiči mandrilov, ki so
                ranljivejši in lažji plen. Mandrili so razvili obrambne mehanizme, da bi se
                izognili plenilcem. V skupinah se
                lahko združijo in z izrazitimi vokalizacijami ter trkanjem po drevesih odvrnejo
                plenilca. Samci, ki so običajno večji in bolj mišičasti, lahko uporabljajo svojo moč
                in prisotnost, da odženejo potencialne plenilce.

                Poleg zveri so mandrili ogroženi tudi s strani ptic roparic, kot so orli in sokoli. Te ptice lahko
                napadajo predvsem mladiče mandrilov, ki so še posebej ranljivi. V takih primerih se mandrili zatečejo
                k hitremu begu in iskanju zavetja med gosto vegetacijo, kjer so manj opazni za plenilce iz zraka.

                Družbeno vedenje mandrilov igra tudi vlogo pri zaščiti pred plenilci. Živijo v večjih skupinah,
                znanih kot tropi, ki vključujejo več samcev, samic in mladičev. Večje število oči in ušes v skupini
                omogoča hitro zaznavanje plenilcev. Družbeno sodelovanje in opozarjanje na nevarnost s pomočjo glasov
                in gibanja so ključni dejavniki za zaščito pred napadi plenilcev.
            </p>
        </div>
    </div>


</body>

</html>