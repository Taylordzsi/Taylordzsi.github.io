<?php
include ('header.html');
include '../Controller/kenyszer.php';
$ert = new KenyszerView();
$ert->lista();
?>

    
<?php
for($i=0; $i<count($ert->result2); $i++)
{
    
    echo $ert->result2[$i];
    
}


?>
