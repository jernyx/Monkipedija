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

    <h1 class="title6" style="margin-bottom: 0px; font-size: 27px;">Pavijan</h1>
    <img src="../slike_mokipedija\pavijan.jpg" alt="pavijan" style="margin-left:27%; margin-top:30px;" />
    </div>
    <div class="info1" style="margin-top: 0px;">
        <div>
            <h1 class="title11" id="habitat">Habitat</h1>
            <p>
                Pivijani se najpogosteje pojavljajo v gozdnih območjih, kot so tropski
                deževni gozdovi, mešani gozdovi in bambusovi gozdovi. V teh okoljih se
                gibljejo med drevesi, kjer uporabljajo svoje okretne okončine in dolg rep
                za premikanje med vejami. Visoko v krošnjah iskajo
                hrano, kot so listi, poganjki, cvetovi in sadje. Njihov življenjski prostor
                v gozdu jim omogoča tudi zaščito pred plenilci ter dostop do raznolike prehrane.

                Pivijani so prilagojeni na različne višinske pasove, kar pomeni, da naseljujejo
                tudi gorske habitate. V teh višje ležečih območjih se soočajo s spremenljivimi
                temperaturami in pogosto večjim pomanjkanjem hrane v primerjavi z nižjimi legami.
                Vendar so zaradi svoje prilagodljivosti sposobni premagati te izzive.

                Habitat pivijanov vključuje tudi območja, ki so obogatena z bambusovimi gozdovi.
                Bambus predstavlja pomemben del njihove prehrane in tako so pivijani prilagojeni na
                pridobivanje hrane iz teh višjih rastlin. Njihova sposobnost prilagajanja na različne
                vrste hrane in habitatov je ključna za preživetje te vrste v dinamičnem okolju jugovzhodne Azije.
            </p>
        </div>
        <div>
            <h1 class="title11" id="anatomija">Anatomija</h1>
            <p>
                Ena izmed značilnosti pavijanov je njihova velika in mišičasta telesna zgradba.
                Imajo močne okončine in roke, ki jim omogočajo
                premikanje po tleh in plezanje po drevesih. Pavijani so večinoma kvadrupedi, kar pomeni,
                da se premikajo na vseh štirih okončinah. Njihova telesna zgradba je prilagojena tako za
                premikanje po različnih vrstah terena kot tudi za uporabo orodij.

                Glava pavijanov ima značilne oblike, odvisno od podvrste. Njihov obraz je prepoznaven po
                izrazitih ličnicah, ki lahko služijo kot komunikacijsko orodje znotraj skupine. Imajo izrazite
                čeljusti in močne čeljustne mišice, kar jim omogoča prehranjevanje z različnimi vrstami hrane,
                vključno z rastlinsko in živalsko.

                Pavijani imajo razvite zobe, ki so prilagojeni za razčlenjevanje različnih vrst hrane. Imajo
                očesače in sekutiče za žvečenje rastlinske hrane ter ostrije zobe za prehranjevanje z mesom in
                trdo hrano. Ta prilagoditev jim omogoča izkoriščanje raznolikih virov hrane in prilagajanje
                prehrane glede na razpoložljivost.

                Njihov vid je dobro razvit, kar je pomembno za iskanje hrane, prepoznavanje plenilcev in
                vzdrževanje družbenih interakcij. Imajo velike oči, ki jim omogočajo dober periferni vid
                ter zaznavanje gibov v okolju.
            </p>
        </div>
    </div>


    <div class="info1">
        <div>
            <h1 class="title11" id="prehrana">Prehrana</h1>
            <p>
                Pavijoni se prehranjujejo z raznoliko rastlinsko hrano, kot so listi,
                poganjki, cvetovi, sadje, semena in korenine. Njihova prehrana se spreminja
                glede na letne čase in razpoložljivost hrane v njihovem okolju. Listje predstavlja
                pomemben del prehrane, vendar se v obdobjih,
                ko je ta vir hrane omejen, osredotočijo na druge vire, kot so
                plodovi ali korenine.

                Pavijoni so znani tudi po svoji sposobnosti prehranjevanja z živalsko hrano. To
                vključuje majhne žuželke, ličinke, črve, pajke, skoraj vse vrste majhnih vretenčarjev ter
                celo majhne sesalce, kot so mladi glodavci. Lovljenje živalske hrane je pogosto povezano s
                prilagajanjem sezonskim spremembam v razpoložljivosti rastlinske hrane.

                Družbeni vidik prehranjevanja je pomemben pri pavijonih, saj živijo v hierarhičnih skupinah.
                Vodja skupine, običajno alfa samec, ima pogosto prednost pri izbiri hrane in dostopu do virov. Nižje
                rangirani člani skupine morda nimajo enakega dostopa do najboljših delov hrane, kar lahko vodi do konkurence
                in družbenih interakcij med člani skupine.
            </p>
        </div>
        <div style="margin-bottom:100px;">
            <h1 class="title11" id="predatorji">Predatorji</h1>
            <p>
                Eden izmed glavnih plenilcev pavijonov so veliki zveri, kot
                so levi, leopardi in hieni. Te plenilce privlačijo mladiči,
                šibkejši člani skupine ali osebki, ki so se oddaljili od skupine. Za
                zaščito pred temi plenilci pavijoni razvijajo različne obrambne taktike. V skupini
                lahko sodelujejo in s skupinskim vedenjem odvrnejo plenilce. Prav tako lahko vodilni
                samec uporablja svoj močan glas in telesno velikost za prestraševanje potencialnih plenilcev.

                Poleg sesalcev so pavijoni ogroženi tudi s strani ptic roparic, kot so orli
                in sokoli. Te ptice so sposobne napadati pavijone, predvsem mladiče, ki so bolj ranljivi. V
                takih primerih se pavijoni lahko zatečejo k hitremu begu in iskanju zavetja med gosto vegetacijo.

                Pavijoni so znani po svojem družbenem vedenju, ki ima tudi vlogo pri zaščiti pred plenilci.
                Skupinska dinamika omogoča varovanje posameznikov pred plenilci, saj večje število oči in ušes
                omogoča hitro zaznavanje nevarnosti. Če člani skupine opazijo plenilca, lahko s skupnim opozarjanjem
                in begom poskrbijo za zaščito celotne skupine.

                Vendar pa so pavijoni, podobno kot mnoge druge vrste, ogroženi tudi s strani človeške
                dejavnosti
            </p>
        </div>
    </div>


</body>

</html>