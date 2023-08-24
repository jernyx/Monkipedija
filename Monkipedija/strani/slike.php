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

  <h1 class="title7">Galerija Slik</h1>
  <div class="slike">
    <figure>
      <img class="slike1" onclick="povecajSliko(this)" src="../slike_mokipedija\spider_monkey.jpg" alt="pajkova opica" />
      <figcaption>Pajkovska opica</figcaption>
    </figure>
    <figure>
      <img class="slike1" onclick="povecajSliko(this)" src="../slike_mokipedija\squirrel_monkey.jpg" alt="Veveričarka" />
      <figcaption>Veveričarka</figcaption>
    </figure>
    <figure>
      <img class="slike1" onclick="povecajSliko(this)" src="../slike_mokipedija\gibon.jpg" alt="Gibon" />
      <figcaption>Gibon</figcaption>
    </figure>
    <figure>
      <img class="slike1" onclick="povecajSliko(this)" src="../slike_mokipedija\gorile.jpg" alt="Gorila" />
      <figcaption>Gorila</figcaption>
    </figure>
    <figure>
      <img class="slike1" onclick="povecajSliko(this)" src="../slike_mokipedija\makak.jpg" alt="Rdečelični makak" />
      <figcaption>Rdečelični makak</figcaption>
    </figure>
    <figure>
      <img class="slike1" onclick="povecajSliko(this)" src="../slike_mokipedija\mandril.jpg" alt="Mandril" />
      <figcaption>Mandril</figcaption>
    </figure>
    <figure>
      <img class="slike1" onclick="povecajSliko(this)" src="../slike_mokipedija\marmozetka.jpg" alt="Navadna marmozetka" />
      <figcaption>Navadna marmozetka</figcaption>
    </figure>
    <figure>
      <img class="slike1" onclick="povecajSliko(this)" src="../slike_mokipedija\orangutan.jpg" alt="Orangutan" />
      <figcaption>Orangutan</figcaption>
    </figure>
    <figure>
      <img class="slike1" onclick="povecajSliko(this)" src="../slike_mokipedija\pavijan.jpg" alt="Pavijan" />
      <figcaption>Pavijan</figcaption>
    </figure>
    <figure>
      <img class="slike1" onclick="povecajSliko(this)" src="../slike_mokipedija\rilcar.jpg" alt="Rilčar" />
      <figcaption>Rilčar</figcaption>
    </figure>
    <figure>
      <img class="slike1" onclick="povecajSliko(this)" src="../slike_mokipedija\simpanz.jpg" alt="Šimpanz" />
      <figcaption>Šimpanz</figcaption>
    </figure>
    <figure>
      <img class="slike1" onclick="povecajSliko(this)" src="../slike_mokipedija\vervet.jpg" alt="Vervet" />
      <figcaption>Vervet</figcaption>
    </figure>
    <figure>
      <img class="slike1" onclick="povecajSliko(this)" src="../slike_mokipedija\harambe.jpg" alt="Harambe" />
      <figcaption>Harambe</figcaption>
    </figure>
    <figure>
      <img class="slike1" onclick="povecajSliko(this)" src="../slike_mokipedija\koko.jpg" alt="Gorila Koko" />
      <figcaption>Gorila Koko</figcaption>
    </figure>
    <figure>
      <img class="slike1" onclick="povecajSliko(this)" src="../slike_mokipedija\stric.jpg" alt="Stric" />
      <figcaption>Debeli Stric</figcaption>
    </figure>


  </div>
</body>

</html>