<?php
session_start();
include "../php/ustvari_objavo.php"
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
        include "../php/navigacija.php"; //če sejna spremenljivka logged in še ni določena potem uporabimo navadno navigacijo
    }
    ?>


    <div class="vpogled">

        <?php foreach ($sql1 as $s1) { ?>
            <div>
                <h1 class="title11"><?php echo $s1["naslov"]; ?></h1>
            </div>

            <p>Avtor: <?php echo $s1["avtor"] ?></p>
            <p><?php echo $s1["vsebina"] ?></p>
        <?php } ?>


        <?php //če si prijavljen in če je ime uporabniškega računa enako imenu avtorja lahko objavo zbrišeš 
        if (isset($_SESSION['logged_in'])) {
            if ($_SESSION["uporabniško_ime"] == $s1["avtor"]) {
                echo '<form method="post">
            <input hidden type="text" name="id" value="' . $s1["id"] . '"> 
            <button name="zbrisi" class="button6"> Zbriši Objavo </button>
        </form>';
            }
        }
        //syntax opozorilo: pri  $s1["id"] spremeni v . $s1["id"] . , ker moreš seperirat php spremenljivko iz html kode        
        ?>
    </div>

</body>

</html>