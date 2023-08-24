<?php
session_start();
$povezava = mysqli_connect("localhost", "root", "", "podatkovna_baza");
if ($_SERVER['REQUEST_METHOD'] == "POST") {

   $uporabniško_ime = $_POST['Usname'];
   $geslo = $_POST['Gesl'];

   if (!empty($uporabniško_ime) && !empty($geslo)) {

      $query = "select * from uporabniki where user_name = '$uporabniško_ime' limit 1";
      $razultat = mysqli_query($povezava, $query);

      if ($razultat) {
         if ($razultat && mysqli_num_rows($razultat) > 0) {

            $user_data = mysqli_fetch_assoc($razultat);

            if ($user_data['password'] === $geslo) {

               $_SESSION["logged_in"] = 1; //nasataivmo logged_in na 1 kadar se prijaviš
               $_SESSION["uporabniško_ime"] = $uporabniško_ime; //zapomnimo si uporabniško ime, zato da ga bomo lahko prikazali
               header("location: ../strani/index.php");
               die;
            }
         }
      }
   }
   header("location: ../strani/login.php");
   die;
}
