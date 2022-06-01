
<?php
include "header.html";
if(isset($_POST['sub6']))
{
   
    $zalogazon=$_POST['zalogazon'];

    include '../Model/kivaltas.classes.php';
    $obj7 = new Kivaltasok($zalogazon);
    $obj7->Kivaltas($zalogazon);
  

}

if(isset($_POST['kivalt']))
{


$id=$_POST['tranz_number'];
 
$modosit=date("Y-m-d H:i:s");
$becsertek=$_POST['kiosszeg'];
$allapot=$_POST['allapot'];
echo $allapot;
echo $id;
echo $modosit;

    include '../Model/update.classes.php';
    $obj8 = new Frissites($modosit, $allapot, $id);
    $obj8->AllapotMod($modosit, $allapot, $id);



    $obj9 = new Frissites();
    $obj9->egyebinsert($becsertek, $modosit);

    ?>
            
    <?php

}
?>
<h2>Zálog kiváltása</h2>
<div class="form-group">
<form action="" method="post">
    <p></p>
<input type="text" name="zalogazon" placeholder="Zálog azonosító"><br><br>
<input type="submit" name="sub6" value="Tovább a kiváltáshoz" class="btn-own-sa">
<p></p>
</form>
</div>

</body>
</html>