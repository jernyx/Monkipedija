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

    <h1 class="title6" style="margin-bottom: 0px; font-size: 27px;">Rdečelični makak</h1>
    <img src="../slike_mokipedija\makak.jpg" alt="makak" style="margin-left:27%; margin-top:30px;" />
    </div>
    <div class="info1" style="margin-top: 0px;">
        <div>
            <h1 class="title11" id="habitat">Habitat</h1>
            <p>
                Naseljujejo raznolike habitate v Japonskem otočju. Njihov habitat vključuje gozdove,
                planinske regije, obale in termalne vrelce, kar kaže na njihovo prilagodljivost in
                sposobnost preživetja v različnih okoljih.

                V gozdnih habitatih se rdečelični makaki gibljejo med drevesi in tlemi. Raznovrstno rastlinje jim
                nudi hrano, zato so odvisni od sezonskih sprememb v razpoložljivosti plodov, semen, listja in brstov.
                V hladnejših mesecih, ko hrana postane redkejša, se pogosto selijo v višje ležeče planinske predele,
                kjer se lahko srečujejo z zelo nizkimi temperaturami.

                Izjemno zanimivo je opazovati rdečelične makake, kako se zadržujejo v termalnih vrelcih, ki jih
                najdemo v nekaterih delih Japonske. Ti vrelci so zanje zatočišče pred mrazom in hkrati omogočajo
                socialno interakcijo ter čiščenje dlake. To edinstveno vedenje ni le prilagoditev okolju, temveč
                tudi kulturna tradicija, ki se prenaša med člani skupine.

                Njihov socialni sistem je izredno pomemben za preživetje v habitatu. Skupine makakov sestavljajo
                različna družinska jedra, ki si delijo ozemlje in hrano. Hierarhija znotraj skupine igra ključno
                vlogo pri urejanju dostopa do virov in družbenega stika ter ohranjanju reda v skupini.

            </p>
        </div>
        <div>
            <h1 class="title11" id="anatomija">Anatomija</h1>
            <p>
                Rdečelični makaki imajo prepoznavne rdeče lise na obrazu, zaradi česar so
                dobili svoje ime. Njihova koža je prekrita z gostim
                slojem dlake, ki deluje kot izolacija pred hladnimi temperaturami. Ta plast
                dlake je v hladnejših mesecih še posebej gosta in dolga, kar jim pomaga preživeti
                v zahtevnih zimskih razmerah.

                Njihov skelet je prilagojen tako za gibanje po drevesih kot tudi za hojo po tleh.
                Rdečelični makaki imajo razmeroma dolge roke in noge, ki jim omogočajo lahkotno plezanje
                po vejah in premikanje med različnimi nivoji gozdov. Prsti na rokah in nogah so opremljeni
                s koničastimi nohti, kar jim omogoča dober oprijem.

                Glava rdečeličnih makakov je sorazmerno velika in ima značilno obliko za opice. Imajo
                razmeroma velike oči, ki so prilagojene za nočno in dnevno aktivnost. Njihov vid je pomemben
                za iskanje hrane, prepoznavanje plenilcev in vzdrževanje družbenih odnosov znotraj skupine.

                Za prehranjevanje uporabljajo raznovrstne zobe, ki so prilagojeni za razčlenjevanje različnih
                vrst hrane. Imajo sekutiče in očesače za trganje rastlinske hrane ter ostrije, rezalne zobe za
                meso. Ta prilagoditev jim omogoča prehranjevanje z različnimi vrstami hrane, kar je ključno za
                preživetje v spreminjajočem se okolju.

                Notranji organi rdečeličnih makakov so prav tako prilagojeni njihovemu prehranjevalnemu vedenju in
                fiziologiji. Imajo dobro razvito prebavno in reproduktivno sistem, ki so ključni za preživetje in
                razmnoževanje vrste.
            </p>
        </div>
    </div>


    <div class="info1">
        <div>
            <h1 class="title11" id="prehrana">Prehrana</h1>
            <p>
                Rdečelični makaki se prehranjujejo z različnimi vrstami rastlinske hrane, kot
                so listi, poganjki, plodovi, semena in korenine. V gozdnih habitatih iskanje
                rastlinske hrane predstavlja pomemben del njihove prehrane. Sezonske spremembe v
                razpoložljivosti hrane vodijo k prilagajanju
                njihove prehrane glede na vrsto hrane, ki je v določenem času najbolj dostopna.

                Poleg tega rdečelični makaki vključujejo tudi živalsko hrano v svojo prehrano. To
                vključuje majhne žuželke, pajke, črve in druge majhne organizme, ki jih najdejo med
                iskanjem hrane v gozdu ali na tleh. Ta prehod med rastlinsko in živalsko hrano jim omogoča
                dopolnjevanje hranilnih snovi in energije ter prilagoditev prehranjevalnih navad glede na
                razpoložljivost hrane.

                Družbeni vidik prehranjevanja je prav tako pomemben pri rdečeličnih makakih. Skupine teh
                opic sestavljajo različna družinska jedra in socialne hierarhije, kar vpliva na dostop do
                hrane. Hierarhija znotraj skupine ureja, kdo ima prednost pri izbiri hrane in kako se točno
                odvija prehranjevanje. Višje rangirani posamezniki imajo običajno prednost pri izbiri najboljših
                delov hrane, medtem ko se nižje rangiranim članom skupine lahko omeji dostop do določenih virov hrane.

                Poleg tega so rdečelični makaki znani po svojem inovativnem prehranjevalnem vedenju. V nekaterih
                regijah so opazili, kako uporabljajo orodja, kot so vejice in kamni, za pomoč pri pridobivanju
                hrane, na primer pri lomljenju orehov ali odstranjevanju lupin s plodov. To kaže na njihovo
                sposobnost prilagoditve in uporabo različnih strategij za pridobivanje hrane.
            </p>
        </div>
        <div>
            <h1 class="title11" id="predatorji">Predatorji</h1>
            <p>
                Ena izmed glavnih nevarnosti za rdečelične makake so sesalci
                plenilci, kot so lisice, kunce, divje mačke in divji psi. Te
                živali lahko ogrozijo mladiče, bolne ali oslabljene osebke ter
                posameznike, ki se znajdejo izven varne skupine. Skupine makakov se
                lahko združujejo, da se učinkoviteje branijo pred takšnimi plenilci.
                Hkrati pa lahko družbena hierarhija znotraj
                skupine določa, kateri člani so bolj izpostavljeni nevarnostim.

                Poleg sesalcev so tudi ptice plenilke lahko nevarnost za rdečelične makake, predvsem
                za mladiče. Ptice roparice, kot so orli in sokoli, lahko predstavljajo resno tveganje,
                ko se makaki gibljejo po tleh ali drevesih. Starši lahko s svojim opozarjanjem in skupinskim
                vedenjem poskušajo odgnati te plenilce in zaščititi svoje mladiče.

                Kljub svoji prilagodljivosti in družbeni dinamiki so rdečelični makaki lahko tudi žrtve človeške
                dejavnosti. Turizem in vedenje turistov lahko vplivata na njihovo prehranjevalno in socialno
                vedenje ter celo povzročata konflikte med ljudmi in makaki. Hrana, ki jo ljudje puščajo na mestih,
                kjer se zadržujejo makaki, lahko vodi do nenaravnih sprememb v njihovem prehranjevalnem vedenju ter
                jih povezuje z ljudmi na načine, ki niso zdravi za njihovo dolgoročno preživetje.
            </p>
        </div>
    </div>


</body>

</html>