<?php
include 'dbh.classes.php';

class Ertesitesketto extends Dbh{

    public $jegy;

    public function __construct($jegy)
    {
        $this->jegy = $jegy;
    }


    public function ertketto($jegy){
       
       $stmt=$this->connect()->prepare('UPDATE tranz SET ertesitve1="1" WHERE id = ?');
       $stmt->execute([$jegy]);
    
        
        
  }
}
?>