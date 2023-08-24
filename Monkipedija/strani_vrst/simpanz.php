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

    <h1 class="title6" style="margin-bottom: 0px; font-size: 27px;">Šimpanz</h1>
    <img src="../slike_mokipedija\simpanz.jpg" alt="simpanz" style="margin-left:30%; margin-top:30px; width:700px; height:auto;" />
    </div>
    <div class="info1" style="margin-top: 0px;">
        <div>
            <h1 class="title11" id="habitat">Habitat</h1>
            <p>
                Šimpanzi so naravno prisotni v tropskih gozdovih in deževnih pragozdih srednje in zahodne Afrike,
                kar vključuje države kot so Kamerun, Gabon, Demokratična republika Kongo, Uganda, Ruanda in druge.
                Njihov habitat vključuje različne ravni nadmorske višine,
                od nižinskih območij do goratih terenov.

                Tropski gozdovi, ki so njihov dom, so izjemno bogati z biotsko raznovrstnostjo. Ti habitati nudijo šimpanzom
                obilico hrane v obliki različnih vrst sadja, listov, brstov in drevesne skorje. To raznoliko prehransko ponudbo so
                šimpanzi izkoristili in razvili prilagoditve, kot so uporaba orodij za dostop do nedostopne hrane, na primer uporaba
                vej za lov na termitov ali oreščke.

                Šimpanzi so znani po svoji izjemni gibčnosti v drevesih. Njihova fizična zgradba, vključno z močnimi rokami,
                prsti in gibljivimi sklepi, jim omogoča, da se elegantno premikajo med vejami, se plezajo in iščejo hrano.
                Poleg tega njihova sposobnost hoje na dveh nogah omogoča premikanje po tleh, vendar so v večini primerov bolj
                udobni in spretni v drevesih.

                Poleg tega so šimpanzi družabne živali in živijo v skupinah, ki se
                gibljejo po svojem habitatu v iskanju hrane in zatočišča. Habitat šimpanzov
                je sestavljen iz različnih mikrookolij, vključno z gozdnimi soteskami, rekami,
                travniki in gozdnimi jasami. Vsaka skupina šimpanzov ima svoje teritorialno območje,
                ki ga brani pred drugimi skupinami.
            </p>
        </div>
        <div>
            <h1 class="title11" id="anatomija">Anatomija</h1>
            <p>
                Ena izmed glavnih podobnosti med človekom in šimpanzom je njihova
                splošna telesna zgradba. Oba imata enak temeljni okvir okostja, vključno z glavo,
                trupom, udmi in okončinami. Njihovi okončine so prilagojene za hojo po štirih
                okončinah (kvadrupedalna hoja), vendar se lahko šimpanzi tudi dvignejo in hodijo na
                zadnjih nogah (bipedalna hoja) ter uporabljajo roke za držanje in manipulacijo s predmeti.

                Šimpanzi imajo veliko močne mišice, predvsem v zgornjem delu telesa, kar jim omogoča
                gibanje po drevesih in izvajanje različnih gibov. Njihova ramena so močno razvita, kar
                jim omogoča močan prijem in plezanje po vejah. Tudi prsti na rokah in nogah so prilagodljivi,
                kar jim omogoča oprijem in manipulacijo s predmeti ter orodji.

                Glede na prehranjevalne navade šimpanzov, so njihovi zobje prilagojeni za različne vrste hrane.
                Imajo močne čeljusti in velike očnjake, ki jih lahko uporabijo za lupljenje plodov, zdrobljenje
                oreščkov in celo za lovljenje manjših živali. Njihovi zobje se lahko tudi razvijejo v različne
                oblike glede na njihovo starost in prehrano.

                Šimpanzi imajo izjemno razvito centralno živčevje, ki je odgovorno za njihovo inteligenco in
                sposobnost učenja. Njihovi možgani so sicer manjši od človeških, vendar so nekatere regije, kot
                je korteks, zelo razvite. Ta razvitost omogoča šimpanzom kompleksno socialno vedenje, kot so orodjarske
                spretnosti, komunikacija, reševanje problemov in oblikovanje družbenih odnosov.

                Poleg tega imajo šimpanzi visoko razvit čutni sistem, vključno z vidom, sluhom, vonjem in otipom.
                Njihov vid je prilagojen za zaznavanje gibov in razlikovanje barv, kar je pomembno pri iskanju hrane
                in prepoznavanju drugih članov skupine.

                Na koncu je anatomija šimpanzov ključnega pomena za razumevanje njihovega vedenja, prehranjevalnih
                vzorcev, interakcij med člani skupine ter njihovega odnosa do okolja
            </p>
        </div>
    </div>


    <div class="info1">
        <div>
            <h1 class="title11" id="prehrana">Prehrana</h1>
            <p>
                Prehrana šimpanzov, ki so najbližji sorodniki človeka v živalskem kraljestvu, je izjemno raznolika
                in se razlikuje glede na vrsto, habitate ter razpoložljive vire hrane. Šimpanzi so znani kot omnivori,
                kar pomeni, da
                se prehranjujejo tako z rastlinsko kot živalsko hrano. Njihova prehrana igra ključno vlogo pri
                vzdrževanju njihovega zdravja, socialne strukture in reproduktivnega uspeha.

                V njihovi prehrani prevladujejo sadje, listi, brsti, cvetovi in ​​drevesne skorje. Sadje je
                pomemben vir energije in hranil, ter igra vlogo pri njihovem razmnoževanju in ohranjanju.
                Šimpanzi so znani po svoji spretnosti pri izbiranju in uporabi orodij, kar jim omogoča, da
                dosežejo nedostopno hrano, kot so termiti, mravlje in orehovi. Svoje taktike lahko prilagajajo
                glede na vrsto plena in habitat, v katerem živijo.

                Poleg tega so šimpanzi znani tudi po lovskem vedenju. Lovijo manjše živali, kot so mladiči drugih
                živali ali manjše opice, včasih pa celo lovijo kolonije opic. Lovljenje živalske hrane dopolnjuje
                njihovo prehrano z beljakovinami in hranili, ki jih ne najdejo v rastlinski hrani.

                Hrana ni le osnova za preživetje šimpanzov, ampak igra tudi pomembno vlogo pri oblikovanju njihove
                družbene dinamike. Deljenje hrane je ključnega pomena za krepitev vezi znotraj skupine. Šimpanzi
                izkazujejo tudi hierarhično vedenje pri prehranjevanju, pri čemer imajo dominantni posamezniki pogosto
                prednost pri dostopu do najboljše hrane.
            </p>
        </div>
        <div style="margin-bottom:100px;">
            <h1 class="title11" id="predatorji">Predatorji</h1>
            <p>
                Kljub temu da so šimpanzi precej močni in vešči v obrambi, so v nekaterih
                primerih vendarle izpostavljeni tveganju pred nekaterimi naravnimi plenilci.

                Eden izmed glavnih plenilcev šimpanzov so leopardi. Leopardi so izurjeni lovci in so
                sposobni presenetiti šimpanze, predvsem mladiče, ki so šibkejši in manj izkušeni v obrambi.
                Leopardi se običajno približajo iz ozadja ali iz dreves, kar jim omogoča, da se
                približajo svojemu plenu neopaženo.

                Druge grožnje za šimpanze predstavljajo tudi velike kače, kot so pitoni in anakonde.
                Te kače se lahko prežijo na šimpanze, ko spijo ali se hranijo. Zaradi svoje velikosti in
                moči so odrasli šimpanzi bolj odporni proti takim plenilcem, vendar so mladiči in šibkejši
                posamezniki bolj ranljivi.

                Poleg tega so šimpanze v nekaterih območjih tarče tudi za nekatere velike zveri, kot so
                afriški psi divjadi, hieni in celo veliki mačji plenilci, kot so levi in tigri. Vendar pa so
                ti primeri manj pogosti, saj šimpanzi večinoma živijo v gozdovih, kjer je večja težava interakcija
                z ljudmi in človeškimi dejavnostmi, kot so uničevanje habitatov, lov ter bolezni, ki jih prinaša človek.

                Šimpanzi so se skozi evolucijo razvili v družabne živali, kar jim omogoča, da se lažje branijo pred
                plenilci. Skupinsko obnašanje in glasno komuniciranje sta pogosto orodji, ki jih uporabljajo za odganjanje
                potencialnih nevarnosti. Odrasli šimpanzi so lahko tudi izjemno agresivni in se bodo borili za zaščito svoje
                skupine, še posebej, če so ogroženi mladiči.
            </p>
        </div>
    </div>


</body>

</html>