<?php
include 'dbh.classes.php';

class Login extends Dbh{

    public $user;
    public $pwd;
    public $datum;



public function __construct()
{


}
    public function getUser($user, $pwd)
    {
        $result=0;
     
        $stmt = $this->connect()->prepare('SELECT * FROM admins WHERE fn=?');
        $stmt->execute(array($user));
        while ($row = $stmt->fetch())
        {
           
            $pass=password_verify($pwd, $row['pwd']);
            if($pass==$pwd)
            {
              $_SESSION['user']=$row['fn'];
             
   
            }
            
        }


        
    }
}

   
?>