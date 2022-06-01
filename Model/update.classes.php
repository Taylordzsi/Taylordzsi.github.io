<?php
include 'dbh.classes.php';



class Frissites extends Dbh
{

   /* public $modosit;
    public $allapot;
    public $id;


    public function __construct($modosit, $allapot, $id)
    {

       $this->allapot=$allapot;
       $this->id=$id;
       $this->modosit=$modosit;
    }
*/
    public function AllapotMod($modosit, $allapot, $id)
     {
       
           $stmt = $this->connect()->prepare('UPDATE tranz SET  modositas = ?, allapot = ? WHERE id = ?');
           $stmt->execute([$modosit, $allapot, $id]);


?>

           <script>alert('Sikeres rögzítés');
           
           var zalogazon = "<?php echo $this->id; ?>";
          
           window.location.href='/BaLog/Controller/nyomtatas2.php?zalogazon='+zalogazon;
           </script>

           <?php
           
}



public function AllapotMod_kenyszer($modosit, $allapot, $id)
     {
       
           $stmt = $this->connect()->prepare('UPDATE tranz SET  modositas = ?, allapot = ? WHERE id = ?');
           $stmt->execute([$modosit, $allapot, $id]);


?>

           <script>alert('Sikeres rögzítés');
           
          
          
           window.location.href='/BaLog/';
           </script>

           <?php
           
      }


      public function egyebinsert($becsertek, $modositas)
      {
          $stmt=$this->connect()->prepare('INSERT INTO egyeb_penzmozgas (osszeg, datum, statusz, jogcim)
          VALUES (?, ?, "be", "zalogkivaltas")');
              $stmt->execute(array($becsertek, $modositas));
      }
}
