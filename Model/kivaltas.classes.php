<?php
include 'dbh.classes.php';

class Kivaltasok extends Dbh{


  public function __construct($zalogazon)

  {
      $this->zalogazon = $zalogazon;
  }

public function Kivaltas($zalogazon)
      {
            $result=0;
            $stmt = $this->connect()->prepare('SELECT * FROM tranz where id = ? AND allapot="zálogosított"');
            $stmt->execute(array($zalogazon));
            while ($row = $stmt->fetch())
            {
              $result++;
              if($result>0)
              {
                
              
                if($row['vege']<(date('Y-m-d')))
                {
                        $kivaltassum=$row['becs_ert']*1.3;
                }
                elseif ($row['vege']>(date('Y-m-d')))
                {
                         $kivaltassum=$row['becs_ert']*1.05; 
                }
                  $kivaltasdatum=date("Y-m-d H:i:s"); 
                  $id=$row['id'];
                  $suly=$row['suly'];
                
                  echo "Kiváltás összesítő:<br>

                <form action=../View/kivaltas.php method=post>
                <input type=text value=$kivaltassum name=kiosszeg>
                <input type=text value=$kivaltasdatum name=modosit maxsize=200>
                <input type=text value=$suly name=suly>
                <input type=text value=$id name=tranz_number>
                <input type=hidden value=kiváltott name=allapot><br><br>
                <input type=submit name=kivalt value=Kiváltás>
                </form>";
              }
              
                     
            }
        
        }
 
      }
    
    