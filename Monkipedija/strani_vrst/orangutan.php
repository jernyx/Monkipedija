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

    <h1 class="title6" style="margin-bottom: 0px; font-size: 27px;">Orangutan</h1>
    <img src="../slike_mokipedija\orangutan.jpg" alt="orangutan" style="margin-left:27%; margin-top:30px;" />
    </div>
    <div class="info1" style="margin-top: 0px;">
        <div>
            <h1 class="title11" id="habitat">Habitat</h1>
            <p>
                Habitat orangutanov je raznolik in edinstven ter vključuje
                deževne gozdove otokov Borneo in Sumatra v jugovzhodni Aziji.
                Deževni gozdovi, kjer živijo orangutani, so eni najbogatejših ekosistemov na svetu. Ti gozdovi so
                sestavljeni iz različnih plastmi rastlinstva, vključno z drevesi, grmičevjem, lianami in epifiti.
                To omogoča orangutanom raznoliko prehrano in možnost gibanja med različnimi nivoji vegetacije.

                Orangutani preživijo večino svojega življenja visoko nad tlemi, saj so drevesa njihov glavni dom.
                Njihova velika
                moč in gibčnost omogočata, da se prepletajo med vejami, plezajo in premikajo po deblih ter iščejo hrano.
                Življenje
                na drevesih jim omogoča tudi zaščito pred plenilci ter lažji dostop do hrane, kot so sadje, listi in
                mladi poganjki.

                Habitat orangutanov je občutljiv na spremembe, zlasti zaradi človeških dejavnosti. Krčenje gozdov
                zaradi sečnje
                dreves za les, izgradnje infrastrukture, kmetijstva in rudarjenja je povzročilo izgubo velikega dela
                njihovega
                življenjskega prostora. To je pripeljalo do zmanjšanja populacij in izolacije posameznih skupin
                orangutanov.

                Zato je ohranjanje habitata ključno za preživetje orangutanov. Veliko organizacij, tako lokalnih
                kot mednarodnih,
                se trudi za zaščito teh gozdov in zagotavljanje trajnostne rabe virov. Ustanavljanje varovanih
                območij in nacionalnih
                parkov ter spodbujanje trajnostnih praks v gospodarstvu so pomembni koraki v tej smeri.


            </p>
        </div>
        <div>
            <h1 class="title11" id="anatomija">Anatomija</h1>
            <p>
                Njihova telesna struktura je prilagojena za življenje na drevesih, plezanje, iskanje hrane ter navigacijo skozi razgibano gozdno okolje.

                Orangutani so znani po svoji močni in gibčni konstituciji.
                Imajo dolge roke in kratke noge, kar jim omogoča učinkovito premikanje
                po drevesih. Njihove roke so izjemno prilagodljive, s širokimi prsti, ki se
                lahko močno ovijejo okoli vej.
                To jim omogoča, da se lahkotno gibljejo med drevesnimi vejami, kar je ključno
                za iskanje hrane in izogibanje plenilcem.

                Orangutani imajo velike mišice zgornjega dela telesa, ki so povezane z njihovim
                načinom življenja. Plezanje in gibanje po drevesih zahtevata veliko moči, zato imajo
                ti primati izrazito razvite mišice ramenskega in hrbtne regije. Njihova kostna struktura
                je prilagojena temu načinu gibanja, s kostmi, ki so trdno povezane in zagotavljajo stabilnost med plezanjem.

                Glava orangutanov je tudi izjemno zanimiva. Imajo močne čeljusti in velike zobe, kar jim
                omogoča žvečenje različne hrane, vključno s sadjem, listi in celo žuželkami. Njihov obraz
                je značilen, z izrazitimi ličnicami in značilno rjavo rdečo dlako, ki je značilna za to vrsto.

                Orangutani so tudi precej inteligentni in imajo dobro razvite možgane. Njihov možganski
                preklop, ki je odgovoren za kognitivne sposobnosti, je podoben tistemu pri ljudeh. To jim
                omogoča zapleteno razmišljanje, reševanje problemov ter uporabo orodij za različne namene,
                kot je na primer nabiranje hrane.
            </p>
        </div>
    </div>


    <div class="info1">
        <div>
            <h1 class="title11" id="prehrana">Prehrana</h1>
            <p>
                Orangutani so večinoma frugivori, kar pomeni, da se prehranjujejo predvsem z različnimi vrstami sadja.
                Njihova prehrana vključuje različne tipe sadja, kot so fige, mango, durian,
                liane in druge gozdne sadeže. Poleg tega se prehranjujejo tudi z mladimi poganjki,
                listi, cvetovi ter celo z lubjem dreves.

                Znano je, da orangutani uporabljajo različne tehnike za pridobivanje hrane. Njihovo
                raziskovanje okolja v iskanju hrane lahko vključuje plezanje po drevesih, uporabo vej
                za dosego nedosegljivih sadov, in celo uporabo orodij, kot so veje in liste, za lažje
                odpiranje trdih lupin.

                Poleg tega so orangutani tudi vsejedi, saj v svojo prehrano vključujejo tudi žuželke,
                kot so mravlje in termiti. Za pridobivanje teh žuželk uporabljajo podobne tehnike, kot pri nabiranju sadja.
            </p>
        </div>
        <div style="margin-bottom:100px;">
            <h1 class="title11" id="predatorji">Predatorji</h1>
            <p>
                Orangutani, kot velike opice, imajo nekaj naravnih plenilcev, vendar pa jim človeške
                dejavnosti predstavljajo veliko večjo grožnjo kot divji plenilci. Kljub temu so se v
                njihovem naravnem okolju srečevali s nekaterimi plenilci, ki so lahko predstavljali
                nevarnost, zlasti za mlade in šibkejše posameznike.

                Ena od vrst, ki bi lahko bila potencialni plenilec za orangutane, so veliki pitoni.
                Ti kačji plenilci bi lahko napadli mlade orangutane, ki bi bili preveč oddaljeni od
                svoje matere ali osamljeni. Veliki pitoni bi lahko izvlekli mladega orangutana iz drevesa in ga zadavili.

                Med drugimi potencialnimi plenilci so tudi velike zveri, kot so tigri in leopardi.
                Vendar pa so takšni plenilci v okolju, kjer živijo orangutani, redki. Ti plenilci bi se
                osredotočali na mlade orangutane ali tiste posameznike, ki bi bili šibki ali poškodovani.
            </p>
        </div>
    </div>


</body>

</html>