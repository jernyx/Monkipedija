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

    <h1 class="title6" style="margin-bottom: 0px; font-size: 27px;">Rilčar</h1>
    <img src="../slike_mokipedija\rilcar.jpg" alt="rilcar" style="margin-left:27%; margin-top:30px;" />
    </div>
    <div class="info1" style="margin-top: 0px;">
        <div>
            <h1 class="title11" id="habitat">Habitat</h1>
            <p>
                Deževni gozdovi na Borneu predstavljajo glavno okolje, kjer opica rilčar najdemo svoj dom. Ti
                gozdovi ponujajo različne plodove, liste in druge rastlinske
                vire hrane, ki so bistveni za prehrano te opice. V bližini vodnih teles, kot so reke in mangrovi,
                opica rilčar išče vodne rastline in živali, ki dopolnjujejo njeno prehrano. Njihov habitatu daje
                oseben čar tudi vrsta drevesa, znana kot dipterokarpi, ki tvori zgornjo plast deževnega gozda in
                zagotavlja prostor za gnezdenje in počitek.

                Opica rilčar je tudi znana po svojem značilnem rilcu, ki ima vlogo pri razkazovanju ozemlja in
                privabljanju partnerjev. Ta izrazita anatomija je edinstvena med opicami in ji omogoča preživetje v
                konkurenčnem habitatu.
            </p>
        </div>
        <div>
            <h1 class="title11" id="anatomija">Anatomija</h1>
            <p>
                Rilčarjev nos je eden najizstopajočih znakov te opice. Ta podaljšan nos lahko doseže
                dolžino tudi do 7,5 cm pri odraslih samcih. Nos je prekrit s kožo
                in napolnjen s kostnim tkivom, kar daje nosu trdno strukturo. Rilčarjev nos ima
                vlogo v termoregulaciji in vlaženju zraka preden ta vstopi v pljuča, kar je pomembno
                v vlažnih tropskih habitatih, kjer opica živi.

                Samci imajo večji in bolj izrazit nos kot samice, kar je povezano z njihovo družbeno
                vlogo in privabljanjem samic med parjenjem. Nos ima tudi zvočno funkcijo, saj se pri opicah
                rilčarjih glasovi odražajo in odbijajo v nosu, kar pripomore k izboljšanju njihove komunikacije.

                Poleg izrazitega nosu imajo opice rilčar tudi tipično strukturo opic, kot so okretni udi, ki
                so prilagojeni za plezanje po drevesih, dolgi rep za ravnotežje ter prilagodljive tačke s petimi
                prsti za primerno oprijemanje vej.

                Njihova dlaka je pretežno rjava z nekaj oranžnimi odtenki, s temnejšo barvo na obrazu in okoli oči.
                Ta barvna variabilnost jim omogoča boljše zlivanje z okoljem in lažje skrivanje pred plenilci.

                Anatomija opice rilčar je edinstvena in se je razvila kot prilagoditev na njihov habitat ter
                družbeno vedenje. Njihov izrazit nos ima več funkcij, vključno z regulacijo temperature, komunikacijo
                in preživetjem v tropskem okolju.
            </p>
        </div>
    </div>


    <div class="info1">
        <div>
            <h1 class="title11" id="prehrana">Prehrana</h1>
            <p>
                Opica rilčar je večinoma frugivorna, kar pomeni, da se
                prehranjuje predvsem z različnimi vrstami sadja. V njihovem
                habitat v deževnih gozdovih Bornea je obilo sadnih dreves,
                ki nudijo opicam različne vrste hrane skozi vse leto. Prehranjevanje
                z različnimi sadji jim zagotavlja potrebne hranilne snovi, kot so vitamini,
                minerali in ogljikovi hidrati.

                Poleg sadja opice rilčar uživajo tudi liste in poganjke različnih rastlin. To
                je pomembno zlasti v obdobjih, ko sadje ni tako obilno ali dostopno. Listi so
                lahko pomemben vir vlaknin in drugih hranil, ki jih potrebujejo za uravnavanje
                prebavnega sistema.

                Včasih se opice rilčar prehranjujejo tudi z vodnimi rastlinami in majhnimi vodnimi
                organizmi. To se običajno dogaja v bližini rek, potokov in mangrov, kjer imajo opice
                dostop do teh virov hrane. Vodne rastline in organizmi jim lahko zagotavljajo dodatne
                beljakovine in hranila, ki so lahko pomembna za njihovo prehrano, zlasti v obdobjih, ko
                je sadja manj na voljo.

                Poleg hrane ima tudi voda pomembno vlogo v prehrani opic rilčar. Njihov izrazit nos, znan
                kot rilec, ima vlogo vlaženja zraka, preden ta vstopi v pljuča. To jim omogoča preživetje v vlažnem
                tropskem okolju, kjer lahko voda v zraku prispeva k težavam pri dihanju.
            </p>
        </div>
        <div style="margin-bottom:100px;">
            <h1 class="title11" id="predatorji">Predatorji</h1>
            <p>
                Ena od glavnih nevarnosti za opice rilčarje so
                velike mesojede živali, ki so sposobne preživeti v deževnih gozdovih.
                To vključuje tigre, leoparda in divje pse, ki so lahko potencialni plenilci,
                čeprav so srečanja med njimi in opicami redka. Rilčarji so sposobni se skriti v
                gosti vegetaciji, kar jim omogoča boljšo zaščito pred temi plenilci.

                Medtem ko večjih plenilcev ni veliko, pa so lahko ptice roparice, kot so orli in jastrebi,
                potencialna nevarnost za mladiče ali oslabljene osebke opic rilčarjev. Ti ptici lahko izkoriščajo
                priložnosti za plenjenje, ko so opice manj previdne ali ranljive.

                Človeška dejavnost je postala ena od največjih groženj za preživetje opic
                rilčarjev.
            </p>
        </div>
    </div>


</body>

</html>