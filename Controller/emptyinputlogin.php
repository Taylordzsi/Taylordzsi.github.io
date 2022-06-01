<?php



class Login2 
{
    public $user;
    public $pwd;
    

    public function __construct($user, $pwd)
    {
        $this->user = $user;
        $this->pwd = $pwd;
    }

    public function logInput()
    {
        if($this->emptyInput()==false)
        {
            ?>
            <script>alert('Üres mező')</script>
            <?php
            //header("location: ../BaLog/index.php");
       
        }
       // $this->getuser($this->user, $this->pwd);
    }

 public function emptyInput()
 {
     $result=0;
     if(empty($this->user) || empty($this->pwd))
     {
         $result = false;

     }
     else{
         $result = true;
     }
     return $result;
 }
}
?>