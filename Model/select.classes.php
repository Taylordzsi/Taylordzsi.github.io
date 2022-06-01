<?php
include 'dbh.classes.php';


//Keresés név alapján, összes lekérdezése
class Lekerdezes extends Dbh{



public function getAll()
{
   ?>
     <h2>Ügyfelek listája</h2>
     
     <?php
      $result=array();
      $stmt = $this->connect()->prepare('SELECT * FROM ugyfel ORDER BY fullname;');
      $stmt->execute();
      while ($row = $stmt->fetch())
      {
        
        
       ?>
     <fieldset>
        <legend>
       
           <h3><?php echo $row['fullname'];?></h3>
          <details>
          <form action=../Controller/feldolgoz.php method=post>
          <p>Név</p>
          <input type=text name=fullname value="<?php echo $row['fullname'];?>" readonly>
          <p>Születés ideje</p>
          <input type=text name=szulido value="<?php echo $row['szulido'];?>" readonly>
          <p>Születés helye</p>
          <input type=text name=szulhely value="<?php echo $row['szulhely'];?>" readonly>
          <p>Lakhely</p>
          <input type=text name=lakhely value="<?php echo $row['lakhely'];?>">
          <p>Tartózkodási hely</p>
          <input type=text name=tarthely value="<?php echo $row['tarthely'];?>">
          <p>Telefon</p>
          <input type=text name=tel value="<?php echo $row['tel'];?>">
          <p>Email cím</p>
          <input type=text name=email value="<?php echo $row['email'];?>">
          <p>Anyja neve</p>
          <input type=text name=anyja value="<?php echo $row['anyja'];?>" readonly>
          <p>Szem.Ig.Szám</p>
          <input type=text name=szemig value="<?php echo $row['szemig'];?>">
          <input type=hidden name=id value="<?php echo $row['id'];?>"><br><br>
          <input type="submit"  name="friss" value="Módosít" class="btn btn-own-sa">
          <p></p>
          </details>
          </legend>
          </fieldset>
          </form>
      

     
          <br>
          <?php
      
       
      }
       
       ?>
        </fieldset>
        <?php  
 }


// listába ügyfelek neve
   public function getAllZalog()
   {
         $result=array();
         $stmt = $this->connect()->prepare('SELECT * FROM ugyfel ORDER BY fullname;');
         $stmt->execute();
         while ($row = $stmt->fetch())
         {
           
               $result=array($row['fullname']);
             echo "<option value=".$row['id'].">".$row['fullname']."</option>";
         
               
         }
          
            
         
      }

      public function getAdmin()
      {
         $result=array();
         $stmt = $this->connect()->prepare('SELECT * FROM admins ORDER BY fullnev;');
         $stmt->execute();
         while ($row = $stmt->fetch())
         {
           
             $result=array($row['fulnev']);
             echo "<option value=".$row['id'].">".$row['fullnev']."</option>";
         
               
         }
      }

     


      public function nyomtatasbatranz($ugyfelazon, $datum)
   {
         $result=array();
         $stmt = $this->connect()->prepare('SELECT * FROM tranz WHERE ugyfelazon=?
         AND
         modositas=?');
         $stmt->execute(array($ugyfelazon, $datum));
         while ($row = $stmt->fetch())
         {
         
            $id=$row['id'];
            $ido=$row['ido_tart'];
            $osszeg=$row['becs_ert'];
            $lejarat=$row['vege'];
            $db=$row['darab'];
            $suly=$row['suly'];
            $becsszoveg=$row['becs_szov'];
            $femjel=$row['femjel'];
            $karat=$row['karat'];

            
               $this->lejarat = $lejarat;
               $this->id = $id;
               $this->osszeg = $osszeg;
               $this->ido_tart = $ido;
               $this->db = $db;
               $this->suly = $suly;
               $this->becsszoveg=$becsszoveg;
               $this->karat=$karat;
               $this->femjel=$femjel;
         }
          
            
         
      }
       
   
   
   
   
      public function nyomtatasbatranzki($zalogazon)
      {
            $result=array();
            $stmt = $this->connect()->prepare('SELECT * FROM tranz WHERE id=?');
            $stmt->execute(array($zalogazon));
            while ($row = $stmt->fetch())
            {
            
               $id=$row['id'];
               $ido=$row['ido_tart'];
               $osszeg=$row['becs_ert'];
               $lejarat=$row['vege'];
               $db=$row['darab'];
               $suly=$row['suly'];
               $becsszoveg=$row['becs_szov'];
               $femjel=$row['femjel'];
               $karat=$row['karat'];
               $kezd=$row['kezd'];
               $ugyfelazon=$row['ugyfelazon'];
   
               
                  $this->lejarat = $lejarat;
                  $this->id = $id;
                  $this->osszeg = $osszeg;
                  $this->ido_tart = $ido;
                  $this->db = $db;
                  $this->suly = $suly;
                  $this->becsszoveg=$becsszoveg;
                  $this->karat=$karat;
                  $this->femjel=$femjel;
                  $this->kezd=$kezd;
                  $this->ugyfelazon=$ugyfelazon;
            }
             
               
            
         }




         public function arfolyamleker()
   {
         $result=array();
         $stmt = $this->connect()->prepare('SELECT * FROM arfolyam ORDER BY id DESC LIMIT 1');
         $stmt->execute();
         while ($row = $stmt->fetch())
         {
         
           $this->au1890 = $row['au1890'];
           $this->au1830 = $row['au1830'];
           $this->au1490 = $row['au1490'];
           $this->au1430 = $row['au1430'];
           $this->ag92590 = $row['ag92590'];
           $this->ag92530 = $row['ag92530'];
         }
          
            
         
   }
 
   

   public function penzleker($datum)
   {
         $leker3=array();
         $leker4=array();
         $jogcim1=array();
         $jogcim2=array();

       
        
         $stmt2 = $this->connect()->prepare('SELECT * FROM egyeb_penzmozgas WHERE datum LIKE ?');
         $stmt2->execute(array($datum));
         while ($row = $stmt2->fetch())
         {
            if($row['statusz']=='be')
            {
               array_push($leker3, $row['osszeg']);
               $this->leker3 = $leker3;

               array_push($jogcim1, $row['jogcim']);
               $this->jogcim1 = $jogcim1;
            }


            if($row['statusz']=='ki')
            {
               array_push($leker4, $row['osszeg']);
               $this->leker4 = $leker4;

               array_push($jogcim2, $row['jogcim']);
               $this->jogcim2 = $jogcim2;
            }
         
         }
          
            
         
   }



  
      
   
   }



        




