<?php

include('../Model/felvetelek.classes.php');

class Newuser extends Felvetel
{
    private $fullname, $szulido, $szulhely, $lakcim, $tartozkodas, $telefon, $email, $anyja, $szemig, $uploadfile;
  
    public function __construct($fullname, $szulido, $szulhely, $lakcim, $tartozkodas, $telefon, $email, $anyja, $szemig, $uploadfile)
    {
        $this->fullname=$fullname;
        $this->szulido=$szulido;
        $this->szulhely=$szulhely;
        $this->lakcim=$lakcim;
        $this->tartozkodas=$tartozkodas;
        $this->telefon=$telefon;
        $this->email=$email;
        $this->anyja=$anyja;
        $this->szemig=$szemig;
        $this->uploadfile=$uploadfile;
    }
    public function newUsers()
    {
        if($this->emptyInput()==false)
        {
            
            
            header("location: /BaLog/index.php?error=emptyinput");
            echo "<script>alert(Hiányzó adat!)</script>";
            exit();
       
        }
     
$this->setUgyfel($this->fullname, $this->szulido, $this->szulhely, $this->lakcim, $this->tartozkodas, $this->telefon, $this->email, $this->anyja, $this->szemig, $this->uploadfile);
    }

private function emptyInput()
 {
     $result=0;

     if(empty($this->fullname) || empty($this->szulido) || empty($this->szulhely) || empty($this->lakcim) || empty($this->telefon) || empty($this->email) || empty($this->anyja) || empty($this->szemig) || empty($this->uploadfile))
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