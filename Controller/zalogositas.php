<?php

if(isset($_POST['sub4']))
{

   $ugyfelazon = $_POST['ugyfelazon'];
   $becsertek = $_POST['becsertek'];
   $nap = $_POST['nap'];
   $femjel = $_POST['femjel'];
   $karat = $_POST['karat'];
   $bkezdet = $_POST['bkezdet'];
   $darab = $_POST['darab'];
   $suly = $_POST['suly'];
   $becsszov = $_POST['becsszov'];
   $penztaros = $_POST['penztaros'];

   switch($nap)
   {
       case 90:
        $kezdes=strtotime("today + 90 days");
        $bveg=date('Y-m-d', $kezdes);
        
        break;


        case 30:
            $kezdes=strtotime("today + 30 days");
            $bveg=date('Y-m-d', $kezdes);
     
        break;
   }


   $modositas=date('Y-m-d H:i:s');
   $allapot='zálogosított';

   include '../Controller/emptyinputzalog.php';
   $obj6 = new Newzalog($ugyfelazon, $becsszov, $becsertek, $nap, $femjel, $karat, $bkezdet, $bveg, $darab, $suly, $penztaros, $modositas, $allapot);
   $obj6->newzalog($ugyfelazon, $becsszov, $becsertek, $nap, $femjel, $karat, $bkezdet, $bveg, $darab, $suly, $penztaros, $modositas, $allapot);
    
$obj7 = new Newzalog($ugyfelazon, $becsszov, $becsertek, $nap, $femjel, $karat, $bkezdet, $bveg, $darab, $suly, $penztaros, $modositas, $allapot);
$obj7->egyebinsert($becsertek, $modositas);

}
?>