<?php
include 'dbh.classes.php';


//Keresés név alapján, összes lekérdezése
class Kereses extends Dbh{
    public $ugyfelnev;

   public function __construct(){

      

    }

    public function getUgyfel($ugyfelnev)
{

     $stmt = $this->connect()->prepare('SELECT * FROM ugyfel where fullname LIKE ?');
     $stmt->execute(array($ugyfelnev));
     while ($row = $stmt->fetch())
     {
           echo "<p>Ügyfél azonosító: </p></b>".$row['id']."</b><br>";
          echo "<p>Teljes név:</p><b>".$row['fullname']."</b><br>";   
          echo "<p>Születés ideje:</p><b>".$row['szulido']."</b><br>";   
          echo "<p>Születés helye:</p><b>".$row['szulhely']."</b><br>";    
          echo "<p>Anyja leánykori neve:</p><b>".$row['anyja']."</b><br>";
          echo "<p>Személyi igazolvány száma:</p><b>".$row['szemig']."</b><br>";   
          echo "<img src=".$row['iratok']." width=200px height=200px>";
       ?>
       <h2> Adatok módosítása</h2>
       <form action="../Controller/feldolgoz.php" method="post">
           <p>Lakhely</p>
       <input type="text" name="lakhely" value="<?php echo $row['lakhely'];?>"><br>
       <p>Tartózkodási hely:</p>
       <input type="text" name="tarthely" value="<?php echo $row['tarthely'];?>"><br>
       <p>Telefon</p>
       <input type="text" name="tel" value="<?php echo $row['tel'];?>"><br>
       <p>Email</p>
       <input type="text" name="email" value="<?php echo $row['email'];?>"><br><br>
       <input type="text" name="szemig" value="<?php echo $row['szemig'];?>"><br><br>
       <input type="hidden" name="id" value="<?php echo $row['id'];?>">
       <input type="submit" value="Módosít" name="friss">
    

     
       </form>
       <br>
       <?php
     }
}

}