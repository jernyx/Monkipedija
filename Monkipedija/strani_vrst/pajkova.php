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

    <h1 class="title6" style="margin-bottom: 0px; font-size: 27px;">Pajkovska opica</h1>
    <img src="../slike_mokipedija\spider_monkey.jpg" alt="pajkovka" style="margin-left:27%; margin-top:30px;" />
    </div>
    <div class="info1" style="margin-top: 0px;">
        <div>
            <h1 class="title11" id="habitat">Habitat</h1>
            <p>
                Njihov habitat je raznolik, saj lahko najdemo pajkoske opice v različnih tipih gozdov,
                vključno z deževnimi, suhih in mešanimi gozdovi ter v bližini vodnih virov.

                Deževni gozdovi so eno izmed najpomembnejših območij, kjer pajkoske opice živijo.
                To so bujni gozdovi z visoko vlažnostjo, bogatimi rastlinskimi viri in gosto vegetacijo.
                Pajkoske opice se premikajo
                med drevesi, uporabljajo svoj rep za ravnotežje in svoje izjemno razvite zanke za premagovanje
                večjih razdalj med drevesi.

                Habitat pajkoskih opic je sestavljen iz zgornjega in spodnjega nivoja gozda. Prebivajo na vrhovih
                dreves, kjer se prehranjujejo z različnimi vrstami sadja, cvetjem, listi, brsti in tudi insekti.
                Njihova sposobnost hitrega premikanja med vejami jim omogoča iskanje hrane na širokem območju.

                Poleg tega je habitat pajkoskih opic tudi mesto socialnega življenja. Pajkoske opice živijo v
                skupinah, ki jih sestavljajo različni posamezniki, vključno s samci, samicami in mladiči. Te skupine
                vzpostavljajo hierarhijo, ki temelji na družbenih interakcijah in igrah moči med posamezniki.
            </p>
        </div>
        <div>
            <h1 class="title11" id="anatomija">Anatomija</h1>
            <p>
                Njihova telesna zgradba se je skozi evolucijo prilagodila premikanju med vejami,
                iskanju hrane in družbenemu življenju.

                Ena od značilnosti pajkoskih opic je njihov rep, ki je prilagoditev za ravnotežje med drevesi.
                Ta rep je dolg in gibčen, omogoča jim vešče premikanje med vejami in celo uporabo repa kot
                dodatnega "rokega" uda za oprijemanje in manipulacijo s predmeti.

                Roke in noge pajkoskih opic so tudi posebno prilagojene. Imajo izrazite dlani in stopala,
                ki so opremljeni z močnimi prsti. Te prilagoditve jim omogočajo trdno držo na vejah ter sposobnost
                grabljenja, plezanja in skakanja z enega drevesa na drugega. Njihovi nohti na prstih so ostrejši,
                kar jim pomaga pri oprijemanju gladkih površin dreves.

                Glede na njihovo prehranjevalno vedenje imajo pajkoske opice prilagojeno ustno votlino. Imajo močne
                čeljusti, ki jim omogočajo lupljenje sadja, rezanje listov in celo uživanje manjših živali, kot so insekti.
                Njihova zgradba zob je prilagojena prehranjevanju z rastlinskimi materiali, kot so vlaknine.

                Anatomija pajkoskih opic se razlikuje med spoloma. Samci so običajno večji od samic in imajo bolj izrazito
                grivo dlak okoli vratu, ki služi kot sekundarni spolni znak. Tudi genitalije se med spoloma razlikujejo in
                so prilagojene za razmnoževanje.

                Pomemben del telesne zgradbe pajkoskih opic je tudi njihov prebavni sistem. Imajo podobno strukturo želodca
                in črevesja kot druge primati, vendar so zaradi prehranjevanja z vlakninami razvili posebne prilagoditve
                za boljšo prebavo te trše hrane.
            </p>
        </div>
    </div>


    <div class="info1">
        <div>
            <h1 class="title11" id="prehrana">Prehrana</h1>
            <p>
                Pajkoske opice so pretežno vegetarijanci in se hranijo z različnimi deli rastlin.
                Njihova prehrana vključuje sadje, listje, poganjke, brste, cvetove ter lubje dreves.
                Glavni vir hrane so sadje in listje, ki
                zagotavljata potrebne hranilne snovi, kot so ogljikovi hidrati, vitamini in minerali.
                Njihov prebavni sistem je prilagojen za razgradnjo vlaknin in drugih rastlinskih materialov.

                Poleg tega pajkoske opice včasih zaužijejo tudi živalski material, kot so insekti, gosenice in manjši
                vretenčarji. To dopolnjuje njihovo prehrano z beljakovinami, ki so lahko omejene v rastlinski hrani.
                Takšen vnos živalskega materiala je zlasti pomemben med obdobji pomanjkanja rastlinske hrane.

                Hranjenje pajkoskih opic je družbena dejavnost. Skupine opic skupaj iščejo hrano in si med seboj
                izmenjujejo informacije o nahajališčih hrane. Med hranjenjem so opice lahko zelo izbirčne in
                preizkušajo različne dele rastlin, da bi našle tiste, ki jim najbolje ustrezajo po okusu in
                hranilni vrednosti.
            </p>
        </div>
        <div style="margin-bottom:100px;">
            <h1 class="title11" id="predatorji">Predatorji</h1>
            <p>
                Eden izmed glavnih naravnih plenilcev pajkoskih opic so različne vrste velikih ptic,
                kot so orli, sokoli in jastrebi. Te ptice so izjemno dobri lovci in imajo izostren vid ter močne
                kljune, kar jim omogoča, da zaznajo in ulovijo pajkoske opice na drevesih.

                Drugi plenilci, ki predstavljajo grožnjo pajkoskim opicam, so plenilske sesalce, kot so mačke in velike
                mačke, kot je ocelot. Te živali se lahko prebijejo skozi gozd in se prehranjujejo z različnimi plenilskimi priložnostmi, med katerimi so tudi pajkoske opice.

                Kače so prav tako plenilci, ki so zmožni vzpenjati se po drevesih in ujeti pajkoske opice. Njihova
                sposobnost premikanja med vejami jim omogoča, da dosežejo višje dele dreves in ujamejo opice, ki se nahajajo tam.

                Leteči plenilci, kot so plenilske ptice, so še ena grožnja pajkoskim opicam. Te ptice lahko preletavajo
                drevesa in iščejo priložnosti za lov na opice, ki so v tistem trenutku nezaščitene.

                Poleg naravnih plenilcev se pajkoske opice včasih spopadajo tudi z nevarnostmi, ki jih predstavljajo
                ljudje. Habitatna degradacija, deforestacija in celo lov lahko ogrozijo njihovo preživetje. Čeprav
                so zaščitene v nekaterih območjih, so še vedno tarča nezakonitega trgovine z eksotičnimi hišnimi
                ljubljenčki.

                Pajkoske opice se prilagajajo grožnjam plenilcev z različnimi strategijami, kot so previdnostni
                ukrepi, kot so zgodnje zaznavanje plenilcev in hitro umikanje v gosto vegetacijo. Njihova sposobnost
                plezanja in skakanja med drevesi jim omogoča, da se hitro umaknejo pred plenilci.
        </div>
    </div>


</body>

</html>