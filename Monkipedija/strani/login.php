<?php
session_start();
ob_start(); //prepreči da se nobena header komanda ne pošle dokler se celotna php koda ne izvede
?>
<!DOCTYPE html>
<html lang="sl">


<head>
    <?php
    include "../php/glava.php";
    ?>

    <script>
        //funkcija za prikaz opozorila o vnosu napačnih podatkov v prijavi
        function opozoriloVnos() {
            document.getElementById("napakica").innerHTML = "Vnesli ste nepravilno uporabniško ime ali geslo";
        }

        //funkcija za skrivanje opozorila o vnosu napačnih podatkov v prijavi
        function opozoriloVnosSkrij() {
            document.getElementById("napakica").innerHTML = "";
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
    include "../php/navigacija.php";
    ?>

    <div class="registracija" id="login">
        <h1 class="title8">Prijava</h1>
        <form method="post" action="login.php">
            <label class="info5">Uporabniško Ime</label>
            <br />
            <input type="text" name="Usname" id="Usname" style="padding: 6px; font-size:16px;" onclick="opozoriloVnosSkrij()" maxlength="30" required />
            <br /><br /><br />
            <label class="info5">Geslo</label>
            <br />
            <input type="password" name="Gesl" id="Gesl" style="padding: 6px; font-size:16px;" maxlength="30" required />
            <br /><br />
            <label id="napakica" class="info7"></label>
            <br /><br />
            <input type="submit" name="log" id="log" value="Prijavi se" class="button3" />
            <br /><br />
        </form>
    </div>
</body>

<?php
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
}
echo '<script> opozoriloVnos(); </script>';

?>

</html>