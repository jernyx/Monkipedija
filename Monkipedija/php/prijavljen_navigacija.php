<nav>
    <div class="navbar">
        <div>
            <a href="#">
                <img src="..\slike_mokipedija\logotip.png" alt="MONKIPEDIJA logo" class="slika2" />
            </a>
        </div>
        <div class="items">
            <a href="../strani/index.php">Domov</a>
            <a href="../strani/informacije.php">Informacije </a>
            <a href="../strani/vrste.php">Vrste</a>
            <a href="../strani/zanimivosti.php">Zanimivosti</a>
            <button onclick="toggleGalerija()" class="button0">Galerija</button>
            <a href="../strani/objave.php">Objave</a>
        </div>
        <div class="odjava">
            <img src="..\slike_mokipedija\profil.png" class="slika4" onclick="toggleProfil()">
        </div>
    </div>
</nav>

<div class="galerija" id="galerija">
    <a href="../strani/slike.php">Slike</a>
    <br /><br />
    <a href="../strani/videi.php">Videi</a>
</div>

<div class="profil" id="profil">
    <div class="uporabniki">
        <h3 class=title9>Uporabnik:</h3>
        <br />
        <?php
        echo "<p style='margin:0px; margin-top: -10px;'>{$_SESSION['uporabniško_ime']}</p>";
        ?>
    </div>
    </br>
    <a href="../strani/objavljanje.php" style="color:white;">Ustvari Objavo</a>
    <br /><br />
    <form method="post">
        <button class="button4" name="odjava">Odjava</button>
    </form>
    <?php
    if (isset($_POST['odjava'])) {
        if ($_SESSION['logged_in'] == 1) {
            $_SESSION['logged_in'] = 0;
            header("Location: ../strani/index.php ");
        }
    }
    ?>
    <br />
</div>