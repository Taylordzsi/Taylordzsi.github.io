<?php
include 'dbh.classes.php';

class AdminFel extends Dbh{

    public function __construct()
    {
        
    }


    public function setAdmin($pwd, $username, $fullname, $date){
        $stmt=$this->connect()->prepare('INSERT INTO admins  (pwd, fn, fullnev, ut_bejelent) VALUES (?, ?, ?, ?);');
        $stmt->execute(array
        ($pwd, $username, $fullname, $date));
    
  
       
  }
}