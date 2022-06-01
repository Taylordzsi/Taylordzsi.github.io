<?php
include ('../View/header.html');
if(isset($_REQUEST['egyebbe']))
{
    $ido = $_REQUEST['idofelv'];
    $jogcim = $_REQUEST['jogcimbe'];
    $osszeg = $_REQUEST['osszegbe'];
    $allapot='be';

    include '../Model/felvetelek.classes.php';
    $peld= new Felvetel();
    $peld->egyebki($ido, $jogcim, $osszeg, $allapot);


}

if(isset($_REQUEST['egyebki']))
{
    $ido = $_REQUEST['idokiv'];
    $jogcim = $_REQUEST['jogcimki'];
    $osszeg = $_REQUEST['osszegki'];
    $allapot='ki';

    include '../Model/felvetelek.classes.php';
    $peld= new Felvetel();
    $peld->egyebbe($ido, $jogcim, $osszeg, $allapot);
}


//mai napon keres
if(isset($_REQUEST['penzsbm']))
{
    
    $eredmeny3=0;
    $eredmeny4=0;
    $datum1=$_REQUEST['idopont'];
    $datum = "$datum1%";
    echo $datum1."<br><br>";
    include '../Model/select.classes.php';
    $ert = new Lekerdezes();
    $ert->penzleker($datum);



        for($i=0; $i<count($ert->leker3); $i++)
        {
      
        $eredmeny3+=$ert->leker3[$i];
        }


        for($i=0; $i<count($ert->leker4); $i++)
        {
   
        $eredmeny4+=$ert->leker4[$i];
        }

        echo "Egyéb bevétel összesen: ".$eredmeny3."<br><br>";
        echo "Egyéb kiadás összesen: ".$eredmeny4;
}




//dátum alapján keres
if(isset($_REQUEST['penzsbm2']))
{
   
  
    $eredmeny3=0;
    $eredmeny4=0;
    $datum1=$_REQUEST['idopont2'];
    $datum = "$datum1%";
    include '../Model/select.classes.php';
    $ert = new Lekerdezes();
    $ert->penzleker($datum);

    echo "Bevételek tételesen: <br><br>";

        for($i=0; $i<count($ert->leker3); $i++)
        {
        echo $ert->leker3[$i].' '.$ert->jogcim1[$i];
        $eredmeny3+=$ert->leker3[$i];
        }

        echo "<br><br>Kiadások tételesen: <br><br>";
        for($i=0; $i<count($ert->leker4); $i++)
        {
        echo $ert->leker4[$i].' '.$ert->jogcim2[$i];
        $eredmeny4+=$ert->leker4[$i];
        }

        echo "<br><br>Bevétel összesen: ".$eredmeny3."<br><br>";
        echo "<br><br>Kiadás összesen: ".$eredmeny4;
}




$kassza=($eredmeny3-$eredmeny4);
echo "<b><br><br><br>Kassza tartalma: </b>".$kassza."<br>";
?>