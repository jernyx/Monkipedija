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




  <h1 class="title10">Objave</h1>



  <?php
  if (isset($_SESSION['logged_in'])) {
    if ($_SESSION['logged_in'] == 1) {
      echo '<form action="objavljanje.php" class="info6">
        <button class="button5"> Ustvari Objavo </button>
        </form>';
    }
  }
  ?>



  <div class="objave">
    <?php foreach ($sql as $s) { ?>
      <div class="karte">
        <div class="karte_telo">
          <h1 class="karte_naslov"><?php echo $s["naslov"]; ?></h1>
          <p class="karte_vsebina"><?php echo $s["vsebina"]; ?></p>
          <a href="vpogled.php?id=<?php echo $s["id"] ?>">Preberi Več</a>
        </div>
      </div>
    <?php } ?>
</body>

</html>