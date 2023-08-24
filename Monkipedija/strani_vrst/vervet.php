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

    <h1 class="title6" style="margin-bottom: 0px; font-size: 27px;">Vervet</h1>
    <img src="../slike_mokipedija\vervet.jpg" alt="vervet" style="margin-left:27%; margin-top:30px;" />
    </div>
    <div class="info1" style="margin-top: 0px;">
        <div>
            <h1 class="title11" id="habitat">Habitat</h1>
            <p>
                V gozdnatih območjih se opice vervet prepletajo med drevesi, kjer si ustvarijo
                domače gnezda, ki jim nudijo zavetje pred plenilci in varno mesto za počitek.
                V teh gozdovih imajo dostop do raznolike prehrane,
                ki vključuje sadje, liste, cvetove in majhne žuželke.

                Na savanah in obrežjih rek verveti preživljajo čas tudi na tleh, kjer se pasejo in iskajo
                hrano. So izjemno družabne živali in tvorijo socialne skupine, imenovane tropi. Ti tropi
                so sestavljeni iz več samcev, samic in mladičev ter imajo jasno določeno hierarhijo.
                Hierarhija igra pomembno vlogo pri vzdrževanju reda v tropu in urejanju dostopa do hrane in drugih virov.

                Opice vervet so znane tudi po svoji značilni komunikaciji. S pomočjo različnih vrst glasov,
                kretenj in obraznih izrazov si izmenjujejo informacije o prisotnosti plenilcev, vrsti hrane
                in drugih pomembnih vidikih okolja. To jim pomaga preživeti v divjini in se izogniti nevarnostim.

                V zadnjih desetletjih so se verveti prilagodili tudi človeškim spremembam okolja. Naselili so
                tudi mestna območja, kjer izkoriščajo hrano in vire, ki jih zagotavljajo človeške dejavnosti.
                Kljub tej prilagodljivosti pa so v nekaterih regijah ogroženi zaradi habitatne degradacije,
                lova in konfliktov s človekom.
            </p>
        </div>
        <div>
            <h1 class="title11" id="anatomija">Anatomija</h1>
            <p>
                Opice vervet imajo močno in agilno telo, prilagojeno plezanju po drevesih. Njihove
                okončine so prilagodljive in omogočajo dober oprijem na vejah. Njihove roke imajo pet prstov,
                od katerih ima vsak konico
                s pazljivo razvito nohtno ploščo. To jim omogoča, da se varno premikajo med vejami,
                hkrati pa lahko manipulirajo s hrano in drugimi predmeti.

                Oblika telesa vervetov je prilagojena tudi za spretno gibanje po tleh. Imajo pokončno držo in zmožnost
                hoditi po štirih okončinah. Njihova hrbtenica je prožna, kar jim omogoča različne načine gibanja, od
                hoje do plezanja.

                Obraz vervetov je zaznamovan z značilnim nosom in ustnicami. Njihov nos je mobilno orodje, ki jim
                pomaga pri iskanju hrane in raziskovanju okolja. Imajo dobro razvite čeljusti, ki jim omogočajo
                prehranjevanje s sadjem, listi, žuželkami in drugimi naravnimi viri hrane.

                Oči opic vervet so pomembne za preživetje, saj jim omogočajo zgodnje zaznavanje plenilcev in drugih
                nevarnosti. Njihov vid je prilagojen za zaznavanje gibanja in barv, kar jim pomaga hitro reagirati na
                spremembe v okolju. Poleg tega imajo dober sluh, ki igra ključno vlogo pri njihovi socialni komunikaciji.

                Verveti imajo značilno dlako, ki je pogosto sive ali zelene barve, odvisno od podvrste in okolja, v
                katerem živijo. Njihova dlaka jim nudi zaščito pred vremenskimi vplivi in ​​pred plenilci. Prsni koš
                opic vervet je dovolj širok za gostejše pljuča, kar jim omogoča učinkovito izmenjavo plinov med dihanjem.
            </p>
        </div>
    </div>


    <div class="info1">
        <div>
            <h1 class="title11" id="prehrana">Prehrana</h1>
            <p>
                Prehrana opic vervet (Chlorocebus pygerythrus) je izjemno raznolika in se
                prilagaja njihovim življenjskim pogojem ter habitatom v vzhodni in južni
                Afriki. Vrsta hrane, ki jo
                uživajo, vključuje sadje, liste, cvetove, lubje, semena, žuželke in manjše živali.

                Sadje predstavlja pomemben del prehrane vervetov. Je bogat vir sladkorjev, vitaminov in vlaknin.
                V obdobjih, ko je sadje obilno, se opice prehranjujejo z različnimi vrstami, kot so mango, fige,
                banane in citrusi. Pogosto uporabljajo svoje izjemno razvite čeljusti in zobe, da lupijo lupino
                in dostopajo do mesa sadja.

                Poleg tega so listi in cvetovi pomemben del prehrane vervetov, še posebej v sušnih obdobjih,
                ko je sadje manj dostopno. Njihova prehrana vključuje tudi lubje dreves, ki ga uživajo zaradi vlaknin
                in hranil. Listje in lubje predstavljata pomemben vir vode za opice, saj se lahko v njem skriva vlaga,
                kar jim pomaga preživeti v sušnih pogojih.

                Opice vervet so znane tudi po tem, da lovijo manjše živali, kot so žuželke in majhni vretenčarji. Lovijo
                lahko mravlje, termiti, gosenice in druge majhne žuželke, ki predstavljajo dodatno beljakovinsko hrano. Z
                uporabo svojih agilnih okončin in izjemno razvitih čutil zaznavajo in lovijo plen.

                Njihova prehrana je tudi odvisna od letnih časov in razpoložljivosti hrane v njihovem habitat. V času suše
                ali pomanjkanja hrane se morajo verveti prilagajati in iskati alternative za prehrano. Prilagodljivost v
                prehranjevanju je ključna za preživetje v spremenljivem okolju.
            </p>
        </div>
        <div style="margin-bottom:100px;">
            <h1 class="title11" id="predatorji">Predatorji</h1>
            <p>
                Eden od glavnih plenilcev opic vervet so velike zveri, kot so levji, leopardi in
                hijene. Te zveri so vrhunski plenilci in se prehranjujejo z različnimi živalmi v svojem okolju, vključno
                z opicami vervet. Zaradi svoje velikosti in moči imajo te zveri sposobnost
                napasti in uloviti opice, ki so v tistem trenutku nemočne.

                Poleg zveri so opice vervet izpostavljene tudi nevarnosti ptic roparic, kot
                so orli in
                jastrebi. Ti plenilci imajo izjemno dober vid in se pogosto prežijo na opice, ki se
                gibljejo med drevesi. Ptice roparice lahko nenadoma napadejo in jih ujamejo, preden opice uspejo pobegniti.

                Kače predstavljajo še enega od naravnih plenilcev opic vervet. Čeprav so
                opice včasih plen za nekatere strupene kače, se zanje še vedno odločijo, saj
                jim nudijo vir hrane. Kljub temu so opice vervet sposobne zaznati in se izogniti
                nevarnim kačam, če je le mogoče.
            </p>
        </div>
    </div>


</body>

</html>