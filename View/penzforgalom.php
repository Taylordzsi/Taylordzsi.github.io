<?php
session_start();
include ('header.html');
?>



<h2>Napi pénzforgalom</h2>
<div class="form-group">
<form action="../Controller/penzforgalom.php" method="post">
<br>
<input type="hidden" name="idopont" value="<?php echo date('Y-m-d'); ?>" >
<input type="submit" name="penzsbm" value="Napi forgalom" class="btn btn-own-sa">
<br><br>
</form>
</div>

<h2>Napi pénzforgalom dátum alapján</h2>
<div class="form-group">
<form action="../Controller/penzforgalom.php" method="post">
<br>
<input type="text" name="idopont2" placeholder="pl.: 2022-01-01" ><br><br>
<input type="submit" name="penzsbm2" value="Napi forgalom" class="btn btn-own-sa">
<br><br>
</form>
</div>
<h2>Egyéb bevételek</h2>
<div class="form-group">
<form action="../Controller/penzforgalom.php" method="post">
<br>
<input type="text" name="idofelv" value="<?php echo date('Y-m-d'); ?>"><br><br>
<input type="text" name="jogcimbe" placeholder="Jogcím"><br><br>
<input type="number" name="osszegbe" placeholder="Összeg"> Ft.
<input type="submit" name="egyebbe" value="Bevétel rögzítése" class="btn btn-own-sa">
<br><br>
</form>
</div>
<h2>Egyéb kivételek</h2>
<div class="form-group">
<form action="../Controller/penzforgalom.php" method="post">
<br>
<input type="text" name="idokiv" value="<?php echo date('Y-m-d'); ?>"><br><br>
<input type="text" name="jogcimki" placeholder="Jogcím"><br><br>
<input type="number" name="osszegki" placeholder="Összeg"> Ft.
<input type="submit" name="egyebki" value="Kivétel rögzítése" class="btn btn-own-sa">
<br><br>
</form>
</div>

