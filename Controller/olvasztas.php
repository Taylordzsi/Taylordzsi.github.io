<?php
include '../View/header.html';
$ido = $_REQUEST['ev']."".$_REQUEST['honap'];
if(isset($_REQUEST['update']))
{
    $allapot=$_REQUEST['kenyszer'];
    $modosit=$_REQUEST['modosit'];
    $id=$_REQUEST['id'];

    include '../Model/update.classes.php';
    $obj8 = new Frissites($modosit, $allapot, $id);
    $obj8->AllapotMod_kenyszer($modosit, $allapot, $id);

}
echo $ido;
include '../Model/olvasztas.classes.php';
$peldany=new Olvasztas();
$peldany->lista($ido);

for ($i=0; $i<count($peldany->jegy); $i++)
{
    echo "Zálogjegy záma: <b>". $peldany->jegy[$i].'</b><br>';
    echo "Zálogjegy tulajdonosa: ".$peldany->fullname[$i].'<br>';
    echo "Össz súly: ".$peldany->suly[$i].' gr<br>';
    echo "Darabszám: ".$peldany->db[$i].' db<br>';
    echo "Bővebb információ: ".$peldany->megj[$i].'<br>';
    echo "Lejárati idő: ".$peldany->lejarat[$i].'<br>';
    echo "Ügyfél telefonszáma: ".$peldany->tel[$i].'<br><br>';
    echo "<form action='' method=post>"
   ." <input type=hidden name=kenyszer value=kényszer>"
   ." <input type=hidden name=modosit value=".date('Y-m-d H:i:s').">"
   ." <input type=hidden name=id value=".$peldany->jegy[$i].">"
    ."<input type=submit value=Kényszerre name=update>"
    ."</form>
    ";
}

?>