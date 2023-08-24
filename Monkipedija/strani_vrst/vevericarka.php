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

    <h1 class="title6" style="margin-bottom: 0px; font-size: 27px;">Veveričarka</h1>
    <img src="../slike_mokipedija\squirrel_monkey.jpg" alt="Veveričarka" style="margin-left:27%; margin-top:30px;" />
    </div>
    <div class="info1" style="margin-top: 0px;">
        <div>
            <h1 class="title11" id="habitat">Habitat</h1>
            <p>
                Opice veveričarke naseljujejo različne tipe habitatov, vključno
                z deževnimi gozdovi, močvirji, travnatimi območji ter obrežnimi in
                poplavnimi habitati. Ti majhni primati so prilagodljivi in se lahko
                prilagajajo različnim okoljem, vendar so najbolj domači v gozdnatih območjih,
                kjer imajo
                dostop do goste vegetacije in dreves.

                Opice veveričarke so drevesne živali, kar pomeni, da večino svojega časa preživijo
                v drevesih. Habitat opic veveričarke je ogrožen zaradi uničevanja gozdov,
                urbanizacije in nezakonitega lova. Ohranjanje njihovega okolja je ključno za
                preživetje te vrste. Zaščitene oblike zemljišča, narodni parki in izobraževalni
                programi so pomembni koraki v pravilno upravljanje in
                zaščito njihovega habitata ter zagotavljanje trajnostnega preživetja te edinstvene vrste.
            </p>
        </div>
        <div>
            <h1 class="title11" id="anatomija">Anatomija</h1>
            <p>
                Veveričarke imajo razmeroma majhno telo, ki jim omogoča lažje premikanje med drevesnimi vejami.
                Imajo dolge in gibčne okončine z močnimi mišicami, ki so ključne za plezanje in
                skakanje med drevesi. Njihovi sprednji okončini so podobni rokam, saj
                imajo pet prstov, ki so prilagodljivi za oprijem in gibanje med vejami. Tako kot druge opice
                imajo tudi veveričarke gibljiv rep, ki jim pomaga ohranjati ravnotežje med gibanjem na višinah.

                Glava veveričarke je relativno majhna, vendar ima izrazite značilnosti. Imajo velike oči, ki so
                pomembne za
                orientacijo v drevesnem okolju, ter dobro razvit vid, ki jim omogoča zaznavanje potencialnih
                plenilcev ali hrane. Njihova zobna struktura je prilagojena njihovi prehrani. Imajo ostre sekalce za
                luščenje sadja in razgrajevanje rastlinskih delov, kot so listi in poganjki.

                Notranje anatomije veveričarke so prav tako prilagojene njihovemu življenju v drevesih. Imajo
                razvite mišice, ki omogočajo gibanje med vejami ter spretno uporabo svojih okončin. Njihov
                kardiovaskularni sistem je prilagojen fizičnemu naporu pri plezanju in skakanju.
            </p>
        </div>
    </div>


    <div class="info1">
        <div>
            <h1 class="title11" id="prehrana">Prehrana</h1>
            <p>
                Sadje je osrednji del prehrane veveričarke. Njihova zobna struktura, vključno z ostrimi sekalci, jim
                omogoča
                učinkovito lupljenje in uživanje različnih vrst sadja, kot so fige,
                banane, jagode, mango, agrumi in drugi tropski sadeži. Veveričarke so znane po tem,
                da se gibljejo med drevesi in isčejo zrelo sadje, kar je ključnega pomena za ohranjanje
                njihove energije in prehranskega ravnovesja.

                Poleg sadja veveričarke uživajo tudi liste, cvetove, brsti in mlade poganjke. Ti deli rastlin so bogati
                z vlakninami, vitamini in hranili ter predstavljajo pomemben vir prehrane, še posebej v obdobjih, ko
                zrelo sadje ni na voljo. Njihova prehrana se prilagaja tudi sezonskim spremembam v razpoložljivosti hrane.

                Veveričarke niso izključno rastlinojede. V njihovo prehrano pogosto vključujejo žuželke, kot so mravlje,
                termiti, gosenice in hrošči. Za tovrstno prehranjevanje uporabljajo svoje spretno manipuliranje s prsti,
                pri čemer uporabljajo svoje ostre sekalce, da razstavijo majhne plenilce in iz njih izluščijo meso.

                Družabno vedenje veveričark prispeva k iskanju hrane. Živijo v skupinah, imenovanih tropi, ki lahko
                vključujejo
                več posameznikov. Skupinsko prehranjevanje jim omogoča lažje lociranje virov hrane in večjo zaščito
                pred plenilci.

                Pomanjkanje hrane ali spremembe v razpoložljivosti virov lahko vplivajo na prehranjevanje veveričarke.
                Zaradi
                tega so veveričarke prilagodljive in se znajo prehranjevati z različnimi vrstami hrane, odvisno od
                okoljskih
                pogojev.
            </p>
        </div>
        <div style="margin-bottom:100px;">
            <h1 class="title11" id="predatorji">Predatorji</h1>
            <p>
                Med njihovimi naravnimi sovražniki so številni plenilci, ki jih zaznavajo kot primerno
                tarčo zaradi njihove velikosti in družabne narave. Med temi sovražniki so različne vrste
                kač, ptice roparice, mungosi in velike mačke, kot so oceloti in jaguarji. Zaradi svoje majhnosti
                in občutljive narave opice veverilke uporabljajo različne obrambne mehanizme, da bi se izognile
                plenilcem.
                Njihova agilnost in spretnost v drevesih jim omogočata hitro bežanje pred nevarnostjo.
                Med njihovimi naravnimi sovražniki so številni plenilci, ki jih zaznavajo kot primerno tarčo
                zaradi njihove velikosti in družabne narave. Med temi sovražniki so različne vrste kač, ptice
                roparice, mungosi in velike mačke, kot so oceloti in jaguarji. Zaradi svoje majhnosti in občutljive
                narave opice veverilke uporabljajo različne obrambne mehanizme, da bi se izognile plenilcem.
                Njihova agilnost in spretnost v drevesih jim omogočata hitro bežanje pred nevarnostjo.
            </p>
        </div>
    </div>


</body>

</html>