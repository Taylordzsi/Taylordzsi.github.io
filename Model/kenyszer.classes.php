<?php
include 'dbh.classes.php';



class Kenyszer extends Dbh
{



public function leker($datum)
{
    $email=array();
    $jegy=array();
    $vege=array();

  
    $stmt = $this->connect()->prepare('SELECT tranz.id, ugyfel.fullname, ugyfel.email, tranz.vege FROM tranz, ugyfel WHERE
    ugyfel.id=tranz.ugyfelazon
    AND 
    tranz.allapot="zálogosított"
    AND
    tranz.ertesitve2 IS NULL
    AND
    tranz.vege=?
    ');
        $stmt->execute(array($datum));
        while ($row = $stmt->fetch())
        {
           array_push($email, $row['email']);
           array_push($jegy, $row['id']);
           array_push($vege, $row['vege']);
            $this->email = $email;
            $this->jegy = $jegy;
            $this->vege = $vege;
            
        }
}

}

?>