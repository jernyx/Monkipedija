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

  <h1 class="title7">Galerija Videov</h1>
  <div class="videi">
    <figure>
      <iframe width="560" height="315" src="https://www.youtube.com/embed/G4QQ8Mfjb_g" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
      <figcaption>Najboljši trenutki gorile Koko</figcaption>
    </figure>
    <figure>
      <iframe width="560" height="315" src="https://www.youtube.com/embed/txDR1y1drl0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
      <figcaption>Snežne opice v topli kopeli</figcaption>
    </figure>
    <figure>
      <iframe width="560" height="315" src="https://www.youtube.com/embed/BSjcJv-eLxM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
      <figcaption>Brezdlaki šimpanzi</figcaption>
    </figure>
    <figure>
      <iframe width="560" height="315" src="https://www.youtube.com/embed/gJEkSGnZiIA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
      <figcaption>Orangutan zahteva banane obiskovalcev</figcaption>
    </figure>
    <figure>
      <iframe width="560" height="315" src="https://www.youtube.com/embed/os1kwb2a4wk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
      <figcaption>Odrasle gorile</figcaption>
    </figure>
    <figure>
      <iframe width="560" height="315" src="https://www.youtube.com/embed/ravykEih1rE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
      <figcaption>Fotografski spomin opic</figcaption>
    </figure>
    <figure>
      <iframe width="560" height="315" src="https://www.youtube.com/embed/d76_15WTKnw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
      <figcaption>Stric debeli uživa solato</figcaption>
    </figure>
    <figure>
      <iframe width="560" height="315" src="https://www.youtube.com/embed/yARtExKaIH8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
      <figcaption>Mladiči zlate opice</figcaption>
    </figure>
    <figure>
      <iframe width="560" height="315" src="https://www.youtube.com/embed/iXtc17ioUFk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
      <figcaption>Teritorjalnost pavijanov</figcaption>
    </figure>
    <figure>
      <iframe width="560" height="315" src="https://www.youtube.com/embed/RA2wWjhHPwU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
      <figcaption>Vriskač - Najglasnejša opica na svetu</figcaption>
    </figure>
  </div>
</body>

</html>