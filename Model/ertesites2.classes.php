<?php
include 'dbh.classes.php';

class Ertesitesegy extends Dbh{

    public $jegy;

    public function __construct($jegy)
    {
        $this->jegy = $jegy;
    }


    public function ertegy($jegy){
       
       $stmt=$this->connect()->prepare('UPDATE tranz SET ertesitve2="1" WHERE id = ?');
       $stmt->execute([$jegy]);
    
        
        
  }
}
?>