<?php
include 'dbh.classes.php';

class Felvetel extends Dbh{

    public function __construct()
    {
        
    }


    public function setUgyfel($fullname, $szulido, $szulhely, $lakcim, $tartozkodas, $telefon, $email, $anyja, $szemig, $uploadfile){
       
       $stmt=$this->connect()->prepare('INSERT INTO ugyfel  (fullname, szulido, szulhely, lakhely, tarthely,
         tel, email, anyja, szemig, iratok) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?);');
        $stmt->execute(array
        ($fullname, $szulido, $szulhely, $lakcim, $tartozkodas, $telefon, $email, $anyja, $szemig, $uploadfile));
    
        
        
  }


  

protected function becsles($ugyfelazon, $becsszov, $becsertek, $nap, $femjel, $karat, $bkezdet, $bveg, $darab, $suly, $penztaros, $modositas, $allapot)
{
    $stmt=$this->connect()->prepare('INSERT INTO tranz  (ugyfelazon, becs_szov, becs_ert, ido_tart, femjel, karat,  kezd, vege, darab, suly, admin_azon, modositas, allapot)
VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);');
    $stmt->execute(array 
    ($ugyfelazon, $becsszov, $becsertek, $nap, $femjel, $karat, $bkezdet, $bveg, $darab, $suly, $penztaros, $modositas, $allapot));


   
    
}


public function egyebbe($ido, $jogcim, $osszeg, $allapot){
    $stmt=$this->connect()->prepare('INSERT INTO egyeb_penzmozgas  (datum, jogcim, osszeg, statusz)
VALUES (?, ?, ?, ?);');
    $stmt->execute(array($ido, $jogcim, $osszeg, $allapot));


  
    
}



public function egyebki($ido, $jogcim, $osszeg, $allapot){
    $stmt=$this->connect()->prepare('INSERT INTO egyeb_penzmozgas  (datum, jogcim, osszeg, statusz)
VALUES (?, ?, ?, ?);');
    $stmt->execute(array($ido, $jogcim, $osszeg, $allapot));


  
    
}


public function egyebinsert($becsertek, $modositas)
{
    $stmt2=$this->connect()->prepare('INSERT INTO egyeb_penzmozgas (osszeg, datum, statusz, jogcim)
    VALUES (?, ?, "ki", "zalog")');
        $stmt2->execute(array($becsertek, $modositas));
}

}