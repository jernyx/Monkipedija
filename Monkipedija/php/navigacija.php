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
    <div class="prijava">
      <button onclick="togglePrijava()" class="button1">Prijava</button>
    </div>
  </div>
</nav>

<div class="galerija" id="galerija">
  <a href="../strani/slike.php">Slike</a>
  <br /><br />
  <a href="../strani/videi.php">Videi</a>
</div>

<div class="login" id="login">
  <form method="post" action="../php/prijava.php">
    <label>Uporabniško ime</label>
    <br />
    <input type="text" name="Usname" id="Usname" style="width:140px" maxlength="30" required />
    <br /><br />
    <label>Geslo</label>
    <br />
    <input type="password" name="Gesl" id="Gesl" style="width:140px" maxlength="30" required />
    <br /><br />
    <input type="submit" class="button2" name="log" id="log" value="Prijava" />
    <br /><br />
    <a href="../strani/registracija.php">Še nimate računa?</a>
    <br /><br />
  </form>
</div>