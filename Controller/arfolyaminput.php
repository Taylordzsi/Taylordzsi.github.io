<?php

include '../Model/arfolyam.classes.php';

class Arfolyam extends Felvetel
{
    public $au1890;
    public $au1830;
    public $au1490;
    public $au1430;
    public $au92590;
    public $au92530;
    public $user;
    public $pwd;
    public $datum2;
    

    public function __construct($au1890, $au1830, $au1490, $au1430, $ag92590, $ag92530, $datum2)
    {
        $this->au1890 = $au1890;
        $this->au1830 = $au1830;
        $this->au1490 = $au1490;
        $this->au1430 = $au1430;
        $this->ag92590 = $ag92590;
        $this->ag92530 = $ag92530;
        $this->datum2 = $datum2;
    }

    public function arfolyamInput()
    {
        if($this->emptyInput()==false)
        {
            ?>
            <script>alert('Üres mező');
            location.href='/BaLog/View/arfolyamrogzites.php';
            </script>
            <?php
        }
        else{
            ?>
            <script>alert('Sikeres rögzítés');
            location.href='/BaLog/index.php';
            </script>
            <?php
        $this->Arfolyam($this->au1890, $this->au1830, $this->au1490, $this->au1430, $this->ag92590, $this->ag92530, $this->datum2);
        }
    }

 private function emptyInput()
 {
     $result=0;
     if(empty($this->au1490) || empty($this->au1430) || empty($this->au1830) || empty($this->au1890) || empty($this->ag92530) || empty($this->ag92590))
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