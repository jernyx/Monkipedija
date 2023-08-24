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

    <h1 class="title6" style="margin-bottom: 0px; font-size: 27px;">Gibon</h1>
    <img src="../slike_mokipedija\gibon.jpg" alt="gibon" style="margin-left:27%; margin-top:30px;" />
    </div>
    <div class="info1" style="margin-top: 0px;">
        <div>
            <h1 class="title11" id="habitat">Habitat</h1>
            <p>
                Tipičen habitat gibonov vključuje goste gozdove, praviloma deževne in mangrove gozdove, ki
                se nahajajo na območjih, kot so Tajska, Indonezija, Malezija, Laos, Vietnam ter nekateri drugi
                deli jugovzhodne Azije. Giboni se
                gibljejo med visokimi vejami dreves in se prehranjujejo z listi, sadjem, cvetjem ter insekti.
                Njihove agilne roke in močne zadnje noge jim omogočajo hitro premikanje in preskakovanje vejevja
                ter iskanje hrane v različnih plasteh gozda.

                Gozdovi, ki jih giboni naseljujejo, so pomembni za njihovo preživetje, saj jim nudijo zatočišče
                pred plenilci, kot so tigri, leopardi in velike kače. Poleg tega jim drevesni habitat omogoča lažji
                dostop do hrane ter preprečuje tekmovalnost z drugimi vrstami opic, saj se giboni večinoma prehranjujejo
                z rastlinsko hrano.
            </p>
        </div>
        <div>
            <h1 class="title11" id="anatomija">Anatomija</h1>
            <p>
                Njihova telesna struktura se odraža v njihovem načinu življenja. Giboni so
                opremljeni z dolgimi, močnimi rokami in kratkimi nogami. To jim omogoča izjemno
                gibanje med vejami dreves. Zadnje noge gibonov so prilagojene za skakanje in plezanje, medtem ko
                so roke izjemno
                gibljive in močne ter jim omogočajo visoko manipulacijo z okolico.

                Njihova prsna košara je široka, kar omogoča povečano gibljivost rok in ramenskega pasu. Giboni
                imajo dolge in krive prste, ki jim omogočajo izjemno oprijemanje vej. Ko se giboni premikajo med drevesi,
                se zanašajo na tehnično dovršeno metodo gibanja, imenovano "brachiacija". To je način premikanja s
                skakanjem in
                visenjem za roke, kar jim omogoča, da prečkajo razdalje med drevesi.

                Giboni imajo močne čeljusti in izrazite zobe, prilagojene prehranjevanju z rastlinsko hrano, kot so listi,
                sadje in cvetje. Njihova prehrana je bogata z vlakninami, kar je prispevalo k oblikovanju njihovega
                prebavnega
                sistema.

                Njihov skeletni sistem je prilagojen za agilno gibanje. Fleksibilna hrbtenica in močni mišični sklepi
                omogočajo
                gibonom izvajanje hitrih in natančnih gibov med drevesi. Sposobnost gibonov za izvajanje hitrih
                akrobatskih gibov,
                kot so salte, obrati in visenje za eno roko, izhaja iz kombinacije moči, ravnotežja in prilagodljivosti
                kosti in
                mišic.
            </p>
        </div>
    </div>


    <div class="info1">
        <div>
            <h1 class="title11" id="prehrana">Prehrana</h1>
            <p>
                Njihova prehrana je sestavljena predvsem iz listov, sadja, cvetja,
                mladih poganjkov ter občasno tudi insektov. Večina njihove prehrane
                temelji na rastlinski hrani, kar je povezano z njihovo anatomsko
                strukturo, kot so zobje in prebavni sistem, prilagojeni za uživanje vlaknate
                hrane.

                Giboni so znani po tem, da porabijo veliko časa za iskanje hrane, saj je njihova prehrana
                pogosto nizkokalorična. To pomeni, da morajo nenehno iskati in se premikati med drevesi,
                da bi zadostili svojim prehranskim potrebam. Njihova sposobnost gibanja med vejami jim omogoča
                dostop do različnih delov dreves ter različnih vrst hrane.

                Poleg tega imajo giboni prilagodljivo prebavno strukturo, ki jim omogoča učinkovito razgradnjo
                rastlinske hrane. Njihov prebavni trakt je prilagojen za fermentacijo vlaknin, kar jim omogoča izkoristek
                hranilnih snovi iz hrane, ki bi drugače ostala nedostopna.

                Giboni so znani tudi po tem, da imajo ozemlja, ki jih obravnavajo kot svoj dom in jih branijo
                pred drugimi
                skupinami gibonov. To je povezano tudi z zagotavljanjem dovolj hrane za svojo skupino. Zaradi
                omejenosti hrane in prostora je ozemlje ključnega pomena za ohranjanje prehranjevalnih virov.
            </p>
        </div>
        <div style="margin-bottom:100px;">
            <h1 class="title11" id="predatorji">Predatorji</h1>
            <p>
                Med glavnimi plenilci gibonov spadajo večji mesojedi, kot so tigri, leopardi in velike kače. Ti
                plenilci se v gozdovih gibonov pojavljajo kot vrhunski plenilci, ki se prehranjujejo z različnimi
                vrstami plena, vključno z opicami. Zaradi svoje velikosti in
                moči so ti plenilci lahko nevarnost za gibone, predvsem mladiče,
                ki so najbolj ranljivi.

                Poleg velikih mesojedih živali so gibone včasih ogrožale tudi druge živali, kot
                so velike ptice roparice, kot so orli in sokoli. Te ptice ropajo gnezda drugih
                ptic in včasih tudi mladiče gibonov.

                Poleg naravnih plenilcev so giboni izpostavljeni tudi nevarnostim, ki jih prinaša
                človeška dejavnost. Uničevanje habitata zaradi krčenja gozdov, urbanizacije in izsekavanja dreves
                lahko poveča izpostavljenost gibonov plenilcem, saj zmanjšuje njihove možnosti za zavetje in skrivanje.

                Kljub tem nevarnostim so giboni razvili nekatere prilagoditve in vedenjske strategije, da se z
                aščitijo pred plenilci. Njihova sposobnost hitrega premikanja med vejami dreves jim omogoča, da se
                lahko umaknejo na varna mesta. Poleg tega imajo giboni razvite socialne strukture in ozemlja, ki jim
                pomagajo zaščititi svojo skupino pred morebitnimi plenilci.
            </p>
        </div>
    </div>


</body>

</html>