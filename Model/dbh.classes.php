<?php
class Dbh{
  protected function connect(){
        try{
            $username="root";
            $pwd="";
            $dbh = new PDO('mysql:host=localhost;dbname=zalog', $username, $pwd);
           
            return $dbh;
        }
        catch(PDOException $e)
        {
            print "error : .$e->getMessage().<br/>";
            die();
        }
        
    }

}
