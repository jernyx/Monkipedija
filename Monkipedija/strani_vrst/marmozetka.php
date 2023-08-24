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

    <h1 class="title6" style="margin-bottom: 0px; font-size: 27px;">Navadna marmozetka</h1>
    <img src="../slike_mokipedija\marmozetka.jpg" alt="Navadna marmozetka" style="margin-left:27%; margin-top:30px;" />
    </div>
    <div class="info1" style="margin-top: 0px;">
        <div>
            <h1 class="title11" id="habitat">Habitat</h1>
            <p>
                Navadne marmorzetke pogosto naseljujejo gozdove, tako v deževnih
                kot tudi sezonskih območjih. V gozdnem habitatu so marmorzetke sposobne
                izkoriščati različne plodove, cvetove, liste in insekte kot del svoje prehrane.
                Njihova majhna velikost jim omogoča, da se prebijajo skozi gosto vegetacijo in
                dosežejo hrano, ki je morda nedostopna večjim živalim. Poleg tega so odlične plezalke,
                kar jim omogoča premikanje po drevesih z lahkoto.

                V močvirnatih območjih so navadne marmorzetke prilagojene vlažnim okoljem. Tukaj lahko
                izkoriščajo različne vodne rastline in živali, kot so žabe in vodni žuželke, za dopolnitev
                svoje prehrane. Njihova sposobnost preživljanja v takšnih habitatah kaže na njihovo prilagodljivost
                in širok nabor prehranjevalnih virov.

                Poleg tega so navadne marmorzetke znane po svojem družbenem vedenju.
                Živijo v skupinah, ki vključujejo enega dominantnega para in njunih potomcev.
                Ta družbena struktura je pomembna za varstvo mladičev in vzpostavljanje hierarhije
                med člani skupine.
            </p>
        </div>
        <div>
            <h1 class="title11" id="anatomija">Anatomija</h1>
            <p>
                Navadne marmorzetke so majhne opice, ki tehtajo le med 250 in 400 grami.
                Imajo dolg rep, ki je daljši od njihovega telesa, in ga uporabljajo za vzdrževanje
                ravnotežja med plezanjem po vejah. Njihove tačke imajo pet prstov, od katerih so dva
                usmerjena naprej in tri nazaj. To jim omogoča trdno oprijemanje vej in različnih površin,
                kar jim olajša premikanje po drevesih.

                Ena izmed značilnosti navadnih marmorzetk je tudi prisotnost krempljev na prstih. Ti kremplji
                niso popolnoma retraktabilni, kar pomeni, da niso sposobni jih popolnoma skriti, kot to lahko
                storijo nekatere mačke. To jim omogoča boljši oprijem in stabilnost med plezanjem.

                Glava navadne marmorzetke je relativno velika v primerjavi s telesom. Imajo izrazite ušesa in
                velike oči, ki jim pomagajo pri zaznavanju okolice in iskanju hrane. Njihov nos je majhen in okrogel,
                z dolgimi brčicami, kar jim omogoča vonjanje hrane ter komunikacijo z drugimi člani skupine.

                Zaradi svoje majhnosti imajo navadne marmorzetke hiter metabolizem.
            </p>
        </div>
    </div>


    <div class="info1">
        <div>
            <h1 class="title11" id="prehrana">Prehrana</h1>
            <p>
                Navadne marmorzetke so frugivorne, kar pomeni, da se prehranjujejo predvsem z
                različnimi vrstami sadja. V njihovem naravnem habitatu vključujejo plodove dreves,
                grmičevja in drugih rastlin, ki rastejo v njihovem okolju. Ta
                hrana jim zagotavlja potrebne vitamine, minerale in ogljikove hidrate za ohranjanje
                energije in zdravja.

                Poleg sadja navadne marmorzetke tudi zaužijejo cvetni nektar, ki ga izsesavajo iz cvetov
                s svojim specializiranim jezikom. Nektar je bogat vir sladkorja in energije ter predstavlja
                pomemben del njihove prehrane. Tako kot pri opraševalcih pomagajo pri širjenju cvetnega prahu
                med različnimi rastlinami.

                Poleg rastlinske hrane navadne marmorzetke včasih uživajo tudi živalske vire hrane. V njihovi
                prehrani so tudi insekti, kot so hrošči, mravlje, pajki in drugi majhni žuželke. Ti živalski proteini
                jim zagotavljajo dodatno beljakovino in hranila ter so še posebej pomembni v obdobjih, ko je sadje manj
                dostopno.

                Pomembna značilnost prehranjevalnih navad navadnih marmorztek je njihova sposobnost fermentacije v
                prebavnem traktu. Imajo zelo dolg prebavni trakt, ki jim omogoča prebavo vlaknin in celuloze, ki je
                prisotna v rastlinski hrani. Ta adaptacija je ključna za izkoriščanje sadja in rastlinskih virov hrane.
            </p>
        </div>
        <div style="margin-bottom:100px;">
            <h1 class="title11" id="predatorji">Predatorji</h1>
            <p>
                Kljub svoji majhnosti in izredni spretnosti v plezanju dreves se sooča s
                številnimi naravnimi plenilci, ki predstavljajo grožnjo njenemu preživetju.

                Med plenilci, ki predstavljajo nevarnost za navadne marmorzetke, so predvsem
                ptice roparice. Velike ptice, kot so sokoli in jastrebi, se lahko usmerijo v manjše
                primatke, kot so marmorzetke, in jih zgrabijo, ko se premikajo
                po drevesih. Z njihovo hitrostjo in natančnostjo lahko ptice roparice
                predstavljajo resno nevarnost, zlasti za mladiče in oslabljene osebke.

                Med plenilci so tudi nekatere sesalce, kot so kačarji in kune. Čeprav so navadne
                marmorzetke spretni plezalci, so včasih tarča teh sesalcev, ki se lahko prebijajo skozi
                gosto rastje in dosežejo njihova gnezda. Plenjenje mladičev ali oslabljenih opic lahko
                predstavlja grožnjo celotni populaciji.
            </p>
        </div>
    </div>


</body>

</html>