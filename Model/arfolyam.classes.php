<?php
include 'dbh.classes.php';

class Felvetel extends Dbh{
    public $au1890;
    public $au1830;
    public $au1490;
    public $au1430;
    public $au92590;
    public $au92530;
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


   protected function Arfolyam($au1890, $au1830, $au1490, $au1430, $ag92590, $ag92530, $datum2){
        $stmt=$this->connect()->prepare('INSERT INTO arfolyam  (au1890, au1830, au1490, au1430, ag92590, ag92530, modositas)
    VALUES (?, ?, ?, ?, ?, ?, ?);');
        $stmt->execute(array
        ($au1890, $au1830, $au1490, $au1430, $ag92590, $ag92530, $datum2));
    
    
       
    }
}