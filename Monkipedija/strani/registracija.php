<?php
session_start();
?>
<!DOCTYPE html>
<html lang="sl">

<head>
  <?php
  include "../php/glava.php";
  ?>

  <script>
    //funkcija za prikaz opozorila da uporabniško ime že obstaja
    function opozoriloIme() {
      document.getElementById("opozorilo").innerHTML = "To uporabniško ime ni na voljo";
    }

    //funkcija za skrivanje opozorila da uporabniško ime že obstaja (vsakič ko klikneš na username input)
    function opozoriloImeSkrij() {
      document.getElementById("opozorilo").innerHTML = "";
    }
  </script>


  <style>
    body,
    html {
      background-image: url("../slike_mokipedija/jungle.jpg");
      /* slika za odzadje registracijske strani*/
      background-size: cover;
      /* slika zapolni celotni ekran*/
      background-repeat: no-repeat;
      /* slika se ne ponavlja vertikalno */
      background-attachment: fixed;
      /* slika ne spreminja svoje višine pri zmanjšanju okna */
      background-position: center center;
      /* slika je vertikalno in horizontalno centrirana pri spreminjanju okna */
    }

    body {
      padding-top: 210px;
    }
  </style>
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

  <div class="registracija" id="registracija">
    <h1 class="title8">Registracija</h1>
    <form method="post" action="registracija.php">
      <label class="info5">Uporabniško Ime</label>
      <br />
      <input type="text" name="Uname" id="Uname" style="padding: 6px; font-size:16px;" onclick="opozoriloImeSkrij()" minlength="3" maxlength="30" required />
      <br /><br /><br />
      <label class="info5">Geslo</label>
      <br />
      <input type="password" name="Geslo" id="Geslo" style="padding: 6px; font-size:16px;" minlength="8" maxlength="30" required />
      <br /><br />
      <label id="opozorilo" class="info7"></label>
      <br /><br />
      <input type="submit" name="reg" id="reg" value="Postani član" class="button3" />
      <br /><br />
    </form>
  </div>
</body>

<?php
$povezava = mysqli_connect("localhost", "root", "", "podatkovna_baza");
if ($_SERVER["REQUEST_METHOD"] == "POST") //preverimo če je bilo karkol poslano 
{
  $uporabniško_ime = $_POST["Uname"]; //dodeljimo vrednost poslanega Uname (uporabniškega imena)
  $geslo = $_POST["Geslo"];   //dodeljimo vrednost posalnega gesla
  $poizvedba = mysqli_query($povezava, "select user_name from uporabniki where user_name='$uporabniško_ime' ");

  if (mysqli_num_rows($poizvedba) == 0) //preverimo če uporabniško ime že obstaja
  {
    $user_id = random_int(1, 1000000); //user_id predstavlja naključno število od ena do milijon
    $query = "insert into uporabniki (user_id, user_name, password) values ('$user_id','$uporabniško_ime', '$geslo' )";
    mysqli_query($povezava, $query); //v tabelo users damo vrednosti user idja, uporabniškega imena in geslo
    header("location: ../strani/index.php");
  } else
    echo '<script> opozoriloIme(); </script>';
}
?>

</html>