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
    include "../php/navigacija.php"; //če sejna spremenljivka logged in še ni določena potem uporabimo navadno navigacijo
  }
  ?>


  <div class="objavljanje">
    <h1>Objava</h1>
    <form method="post" action="../php/ustvari_objavo.php">
      <input type="text" placeholder="Naslov" name="naslov" minlength="3" maxlength="200" required>
      </br></br>
      <textarea name="vsebina" minlength="100" maxlength="20000" required> </textarea>
      </br></br>
      <button name="objavi">Objavi</button>
    </form>
  </div>

</body>

</html>