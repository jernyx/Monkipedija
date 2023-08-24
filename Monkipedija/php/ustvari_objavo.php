<?php
if (!isset($_SESSION)) { //če seja še ni prisotna jo šele zaženeš, ker drgače dobiš opzorilo, če maš dve seji
    session_start();
}
$povezava = mysqli_connect("localhost", "root", "", "podatkovna_baza");

/*if (isset($_REQUEST["objavi"])) {
    $naslov = $_REQUEST["naslov"];
    $vsebina = $_REQUEST["vsebina"];
    $avtor = $_SESSION["uporabniško_ime"];

     $query = "insert into `objave`(`naslov`, `vsebina`, `avtor` ) values ('$naslov', '$vsebina', '$avtor')"; 

    mysqli_query($povezava, $query);

    header("Location: ../strani/objave.php ");
}
*/

if (isset($_REQUEST["objavi"])) {
    $naslov = $_REQUEST["naslov"];
    $vsebina = $_REQUEST["vsebina"];
    $avtor = $_SESSION["uporabniško_ime"];

    $query = "INSERT INTO `objave` (`naslov`, `vsebina`, `avtor`) VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($povezava, $query);

    mysqli_stmt_bind_param($stmt, "sss", $naslov, $vsebina, $avtor);
    mysqli_stmt_execute($stmt);

    header("Location: ../strani/objave.php");
}



$query1 = "select * from objave";
$sql = mysqli_query($povezava, $query1);


//ko klikneš preberi več
if (isset($_REQUEST["id"])) {
    $id = $_REQUEST["id"];
    $query2 = "select * from objave where id=$id";
    $sql1 = mysqli_query($povezava, $query2);
}

//ko klikneš delete v vpogled.php
if (isset($_REQUEST["zbrisi"])) {
    $id = $_REQUEST["id"];
    $query2 = "delete from objave where id=$id";
    $sql1 = mysqli_query($povezava, $query2);
    header("Location: objave.php");
}
