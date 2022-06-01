
<?php
include('header.html');
include '../Model/keresesugyfel.classes.php';
if(isset($_POST['submit']) && isset($_POST['ugyfelneve']))
{
$ugyfelnev=htmlspecialchars($_POST['ugyfelneve']);
$ugyfelnev="%$ugyfelnev%";


$obj2 = new Kereses();

echo $obj2->getUgyfel($ugyfelnev);



}
?>

<h2>Keresés</h2>
<div class="form-group">
<form action="" method="post">
    <p>Ügyfél neve</p>
<input type="text" name="ugyfelneve" required="required">
<p></p>
<input type="submit" value="Listáz" name="submit" class="btn btn-own-sa">
</form>
<p></p>
</div>

</body>
</html>