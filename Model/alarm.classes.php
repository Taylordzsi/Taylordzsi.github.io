<?php
include 'dbh.classes.php';



class Alarm extends Dbh
{



public function lejarat($datum)
{
    $email=array();
    $jegy=array();
  
    $stmt = $this->connect()->prepare('SELECT tranz.id, ugyfel.fullname, ugyfel.email FROM tranz, ugyfel WHERE
    ugyfel.id=tranz.ugyfelazon
    AND 
    tranz.ertesitve1 IS NULL
    AND
    vege=?');
        $stmt->execute(array($datum));
        while ($row = $stmt->fetch())
        {
           array_push($email, $row['email']);
           array_push($jegy, $row['id']);
            $this->email = $email;
              $this->jegy = $jegy;
        }
}

}

?>