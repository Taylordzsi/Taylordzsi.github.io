<?php
include 'dbh.classes.php';

class Egyebfelvetel extends Dbh
{

   public function __construct()
   {
       
   }

public function egyebinsert($becsertek, $modositas)
{
    $stmt2=$this->connect()->prepare('INSERT INTO egyeb_penzmozgas  (osszeg, datum, statusz, jogcim)
    VALUES (?, ?, "ki", "zalog")');
        $stmt2->execute(array($becsertek, $modositas));
}


}