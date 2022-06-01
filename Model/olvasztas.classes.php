<?php
include 'dbh.classes.php';

class Olvasztas extends Dbh
{



 
    
public function lista($ido)
{
 
    $jegy=array();
    $fullname=array();
    $suly=array();
    $megj=array();
    $lejarat=array();
    $db=array();
    $tel=array();
    
  
    $stmt = $this->connect()->prepare('SELECT ugyfel.tel, tranz.id, ugyfel.fullname, tranz.suly, tranz.darab, tranz.becs_szov, tranz.vege FROM tranz, ugyfel WHERE
    ugyfel.id=tranz.ugyfelazon
    AND
    tranz.allapot="zálogosított"
    AND
    tranz.vege <= ?');
        $stmt->execute(array($ido));
        while ($row = $stmt->fetch())
        {
  
            array_push($jegy, $row['id']);
            array_push($fullname, $row['fullname']);
            array_push($suly, $row['suly']);
            array_push($db, $row['darab']);
            array_push($megj, $row['becs_szov']);
            array_push($lejarat, $row['vege']);
            array_push($tel, $row['tel']);

            $this->jegy = $jegy;
            $this->fullname = $fullname;
            $this->suly = $suly;
            $this->db = $db;
            $this->megj = $megj;
            $this->lejarat = $lejarat;
            $this->tel = $tel;

            
        }



}
}