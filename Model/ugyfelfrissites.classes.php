<?php
include 'dbh.classes.php';



class Ugyfelfrissites extends Dbh
{
    public $lakhely;
    public $tarthely;
    public $tel;
    public $email;
    public $id;
    public $szemig;


    public function __construct($lakhely, $tarthely, $tel, $email, $szemig, $id)
    {

       $this->lakhely=$lakhely;
       $this->tarthely=$tarthely;
       $this->tel=$tel;
       $this->email=$email;
       $this->id=$id;
       $this->szemig = $szemig;
    }

    public function frissit($lakhely, $tarthely, $tel, $email, $szemig, $id)
     {
       
           $stmt = $this->connect()->prepare('UPDATE ugyfel SET  lakhely=?, tarthely=?, tel=?, email=?, szemig=? WHERE id=?');
           $stmt->execute([$lakhely, $tarthely, $tel, $email, $szemig, $id]);
           
}
}
