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

    <h1 class="title6" style="margin-bottom: 0px; font-size: 27px;">Gorila</h1>
    <img src="../slike_mokipedija\gorile.jpg" alt="gorile" style="margin-left:30%; margin-top:50px;" />
    </div>
    <div class="info1" style="margin-top: 0px;">
        <div>
            <h1 class="title11" id="habitat">Habitat</h1>
            <p>
                Gorile najdemo v večjem delu srednje in zahodne Afrike, kjer se
                razprostirajo v različnih tipih gozdnih okolij. Njihov habitat je ključnega pomena za preživetje
                teh veličastnih bitij ter ohranitev biotske raznovrstnosti v teh regijah.

                Gorile so znane po svoji prilagodljivosti na različne okoljske pogoje. Njihove življenjske
                navade so tesno povezane z različnimi vrstami gozdnih ekosistemov. Gorske gorile, na primer,
                naseljujejo višinske gozdove gorovij v državah, kot
                so Uganda, Ruanda in Kongo. Njihov habitat obsega gorske padavine, višinske gozdove in travnate planjave.
                Deževni gozdovi pa so dom nizinskih goril, ki prebivajo v nižjih nadmorskih višinah. Njihov habitat je
                prepojen z bujnim rastjem, visokimi drevesi in bogatimi višinami sadnih dreves, ki predstavljajo ključno
                prehransko komponento za te živali.

                Habitat goril je tudi dom mnogim drugim vrstam rastlin in živali. Gost gozdni preplet omogoča
                raznovrstnost
                življenja, ki ga te živali izkoriščajo za hrano, zato so ključnega pomena za ohranitev biološkega
                ravnovesja v
                teh ekosistemih. Medtem ko gorile sejejo semena in pomagajo pri razprševanju rastlin, njihove
                prehranjevalne navade
                vplivajo na strukturo gozda, kar ustvarja možnosti za različne habitate za številne druge organizme.

                Voda igra tudi pomembno vlogo v njihovem habitatnem ekosistemu. Reke in potoki, ki se vijejo skozi
                gozdove,
                zagotavljajo vir pitne vode za gorile in druge živali. Te vodne poti prav tako omogočajo naravno
                interakcijo
                med različnimi vrstami živali ter zagotavljajo življenjsko okolje za vodne organizme.

                Ohranjanje nedotaknjenega habitatnega prostora je ključno za preživetje goril in ohranitev naravnega
                okolja,
                v katerem živijo. Z zaščito teh gozdnih ekosistemov pred potencialnimi človeškimi vplivi in izgubo
                habitata,
                lahko zagotovimo trajnostno prihodnost za te čudovite živali ter ohranimo bogato biotsko raznovrstnost
                teh regij.
            </p>
        </div>
        <div>
            <h1 class="title11" id="anatomija">Anatomija</h1>
            <p>
                Kot največji predstavniki opic so gorile izjemno močne in se odlikujejo po posebnostih, ki
                so jim omogočile uspešno prilagajanje raznolikim življenjskim izzivom.

                Gorile imajo robustno telo z močnimi mišicami, ki jim omogočajo premikanje po džungli in
                vzdrževanje svojega teritorija. Njihova močna ramena so prilagojena za plezanje po drevesih,
                medtem ko so noge sorazmerno krajše, saj
                se večinoma premikajo po tleh. Izkazujejo tudi spolni dimorfizem, kar pomeni, da so samci običajno
                precej večji in močnejši od samic.

                Glava gorile ima značilne značilnosti, kot so veliki čeljusti in izraziti zobje. Njihovi očesni
                vdolbinici so relativno majhni, vendar imajo dober vid, ki jim omogoča zaznavanje premikajočih se
                predmetov v njihovem okolju. Njihov vid je prilagojen za zaznavanje barv, kar je pomembno za prepoznavanje
                zrelega sadja, ki predstavlja ključno komponento njihove prehrane.

                Posebnost goril je tudi njihov skeletni sistem. Njihova hrbtenica je prilagojena za hojo po štirih okončinah
                (kvadrupedalno gibanje), pri čemer se opirajo na svoje prste, ki so podobni človeškim prstom. Kljub temu pa so
                gorile tudi sposobne hoče po dveh nogah, kadar je to potrebno, vendar je to bolj omejeno v primerjavi s človeško
                sposobnostjo pokončne hoje.

                Ena izmed najbolj prepoznavnih lastnosti goril so njihova izjemno močna ramena in roke. Njihovi zgornji udi so
                dolgi in močni, kar jim omogoča plezanje po drevesih, nabiranje hrane ter uporabo orodij, kot so veje in listi,
                za različne namene. Njihove roke so opremljene s prsti, ki so prilagojeni za držanje in manipulacijo s predmeti.

                Anatomija goril odraža njihov življenjski slog ter prilagoditve na njihov habitat. Njihova močna in prilagodljiva
                telesa so ključna za preživetje v zahtevnem okolju deževnih gozdov ter so le ena izmed številnih lastnosti, ki nas
                nenehno fascinirajo in nas spominjajo na raznolikost življenja na našem planetu.
            </p>
        </div>
    </div>


    <div class="info1">
        <div>
            <h1 class="title11" id="prehrana">Prehrana</h1>
            <p>
                Gorile se prehranjujejo z različnimi deli rastlin, kot so listi, stebla, poganjki, sadje,
                cvetovi in lubje dreves. Njihova prehrana se spreminja glede na razpoložljivo hrano
                v okolju, kar pomeni, da lahko zaužijejo raznovrstno hrano glede na letne čase. V sušnih
                obdobjih se osredotočijo na zaužitje več listov, medtem ko v deževnih obdobjih uživajo več sadja.

                Kljub temu da so gorile pretežno rastlinojede, se včasih prehranjujejo tudi z majhnimi živalmi,
                kot so
                insekti, gosenice in majhni sesalci. To jim omogoča dopolnitev določenih hranil, kot so beljakovine
                in vitamin B12.

                Gorile so znane po svoji veliki potrebi po vlakninah, ki jih dobijo iz različnih delov rastlin. Ta
                vlaknina prispeva k pravilnemu delovanju prebavnega sistema in preprečuje prebavne težave. Hkrati pa
                gorile pridobivajo energijo iz ogljikovih hidratov, ki jih vsebuje predvsem sadje.

                Poleg tega gorile tudi prežvekujejo hrano, kar povečuje učinkovitost prebave in omogoča boljši
                izkoristek hranil. Njihov prebavni sistem je prilagojen za razgradnjo vlaknin in trše hrane.

                V naravi se gorile družijo v družinah, v katerih prevladujejo samice. Družine prehodijo velika
                območja v iskanju hrane. Prehrana goril ima ključno vlogo pri njihovem socialnem življenju, saj
                oblikuje njihove prehranjevalne navade, hierarhijo in način komunikacije.
            </p>
        </div>
        <div style="margin-bottom:100px;">
            <h1 class="title11" id="predatorji">Predatorji</h1>
            <p>
                Predatorji, ki predstavljajo grožnjo gorilam, vključujejo leoparde in afriške loveče
                pse. Leopardi so sposobni napadati manjše gorile, še posebej mladiče, medtem ko so
                afriški loveči psi znani po tem, da napadejo celo tropne člane. Vendar so gorile precej trpežne
                in sposobne se braniti, še posebej ko se združijo in delujejo kot skupina.
            </p>
        </div>
    </div>


</body>

</html>