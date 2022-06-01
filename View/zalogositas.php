<?php
session_start();

?>


<body onclick='check()'>
<script src="../js/action.js"></script>
<?php
include ('header.html');
?>
<div class="form-group">
<h2>Zálogosítás</h2>

<form action="..//Controller/zalogositas.php" method="post" name="bevitel" id="bevitel" > 

<select name="ugyfelazon"  required>
<?php
include '../Model/select.classes.php';
$obj5 = new Lekerdezes();
$obj5->getAllZalog();


?>   
</select><br><br>


<select name="nap" required>
    <option value="30">30 nap</option>
    <option value="90">90 nap</option>
</select><br><br>

<select name="femjel" required>
    <option value="mfau"> MF Arany</option>
    <option value="mfnau"> MFN Arany</option>
    <option value="mfag"> MF Ezüst</option>
    <option value="mfnag"> MFN Ezüst</option>
</select><br><br>

<select name="karat" required>
<option value="9">9 K</option>
    <option value="14">14 K</option>
    <option value="18">18 K</option>
    <option value="22">22 K</option>
    <br>
    <option value="925">925</option>
    <option value="900">900</option>
    <option value="835">835</option>
    <option value="800">800</option>
</select><br><br>

<input type="datetime" name="bkezdet" value="<?php echo date('Y-m-d'); ?>"><br><br>
<input type="number" name="darab" placeholder="Darab" id="darab"  required="required"><br><br>
<input type="number" name="suly" placeholder="Gramm" id="suly" required="required"><br><br>

Maximum kiadható összeg<br>
<input type="text" name="becsertek"  onfocus="myFunction()" placeholder="Becs,Érték (FT)" required="required"><br><br>
<input type="text" name="rejtett" readonly ><br><p id="demo"></p>
<textarea name="becsszov" placeholder="Megjegyzések..."  required="required"></textarea><br><br>
<select name="penztaros">
<option value="<?php echo $_SESSION['user'];?>"><?php echo $_SESSION['user'];?></option>
</select><br><br>
<input type="submit" name="sub4"  id="sub4" value="Zálogosítás" class="btn btn-own-sa">
</form>
</div>

<?php


$objar = new Lekerdezes();
$objar->arfolyamleker();
?>
<div class="form-group-sm">
<h3>Napi árfolyam</h3>
<form name="arfolyam" id="arfolyam" action="">
   <p> 18K arany 90 nap</p>
    <input type="number" name="au1890" id="au1890" value="<?php  echo $objar->au1890 ?>" readonly>
    <p> 18K arany 30 nap</p>
    <input type="text" name="au1830" value="<?php  echo $objar->au1830 ?>" readonly>
    <p> 14K arany 90 nap</p>
    <input type="text" name="au1490" value="<?php  echo $objar->au1490 ?>" readonly>
    <p> 14K arany 30 nap</p>
    <input type="text" name="au1430" value="<?php  echo $objar->au1430 ?>" readonly>
    <p> 925 ezüst 90 nap</p>
    <input type="text" name="ag92590" value="<?php  echo $objar->ag92590 ?>" readonly>
    <p> 925 ezüst 30 nap</p>
    <input type="text" name="ag92530" value="<?php  echo $objar->ag92530 ?>" readonly>
</form>
</div>

</body>

</html>