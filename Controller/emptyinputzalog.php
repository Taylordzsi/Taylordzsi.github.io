<?php
include('../Model/felvetelek.classes.php');

class Newzalog extends Felvetel
{
   public $ugyfelazon, $becsszov, $becsertek, $nap, $femjel, $karat, $bkezdet, $bveg, $darab, $suly, $penztaros, $modositas, $allapot;
  
    public function __construct($ugyfelazon, $becsszov, $becsertek, $nap, $femjel,
     $karat, $bkezdet, $bveg, $darab, $suly, $penztaros, $modositas, $allapot)
    {
        $this->ugyfelazon=$ugyfelazon;
        $this->becsszov=$becsszov;
        $this->becsertek=$becsertek;
        $this->nap=$nap;
        $this->femjel=$femjel;
        $this->karat=$karat;
        $this->bkezdet=$bkezdet;
        $this->bveg=$bveg;
        $this->darab=$darab;
        $this->suly=$suly;
        $this->penztaros=$penztaros;
        $this->modositas=$modositas;
        $this->allapot=$allapot;
    }



    public function newzalog()
    {
        if($this->emptyInput()==false)
        {
            
            
            ?>
            <script>alert('Üres mező');
            
           location.href='/BaLog/View/zalogositas.php';
            </script>
            <?php
        }
        else
        {
            ?>
            <script>alert('Sikeres rögzítés');
            var ugyfelazon = "<?php echo $this->ugyfelazon; ?>";
            var modositas = "<?php echo $this->modositas; ?>";
           
            window.location.href='/BaLog/Controller/nyomtatas.php?ugyfelazon='+ugyfelazon+'&datum='+modositas;
            </script>
            <?php
            $this->becsles($this->ugyfelazon, $this->becsszov, $this->becsertek, $this->nap, $this->femjel, $this->karat, $this->bkezdet, $this->bveg, $this->darab, $this->suly, $this->penztaros, $this->modositas, $this->allapot);
            $this->egyebinsert($this->becsertek, $this->modositas);
        }
    }
private function emptyInput()
 {
     $result=0;

     if(empty($this->ugyfelazon) || empty($this->becsszov) || empty($this->becsertek) || empty($this->nap) || empty($this->femjel) || empty($this->karat) || empty($this->bkezdet) || empty($this->bveg) || empty($this->darab) || empty($this->suly) || empty($this->penztaros) || empty($this->modositas) || empty($this->allapot))
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