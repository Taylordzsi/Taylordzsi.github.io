<?php
include "../View/header.html";
$zalogazon=$_REQUEST['zalogazon'];
$datum=date('Y-m-d H:i:s');

//echo $ugyfelazon;
//echo $datum;

if(isset($_POST['sub1']))
{

    include('../Model/select.classes.php');
    $obj = new Lekerdezes();
    $obj->nyomtatasbatranzki($zalogazon);

    if($obj->lejarat<(date('Y-m-d')))
    {
            $osszeg2=$obj->osszeg*1.3;
    }
    elseif ($obj->lejarat>(date('Y-m-d')))
    {
        $osszeg2=$obj->osszeg*1.05; 
    }

   
$filename = 'zalogjegy'.$datum.'.doc';
header("Content-Type: application/force-download");
header( "Content-Disposition: attachment; filename=".basename($filename));
header( "Content-Description: File Transfer");
@readfile($filename);
 
$content = '<html xmlns:v="urn:schemas-microsoft-com:vml" '
        .'xmlns:o="urn:schemas-microsoft-com:office:office" '
        .'xmlns:w="urn:schemas-microsoft-com:office:word" '
        .'xmlns:m="http://schemas.microsoft.com/office/2004/12/omml"= '
        .'xmlns="http://www.w3.org/TR/REC-html40">'
        .'<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">'
        .'<title></title>'
        .'<!--[if gte mso 9]>'
        .'<xml>'
        .'<w:WordDocument>'
        .'<w:View>Print'
        .'<w:Zoom>100'
        .'<w:DoNotOptimizeForBrowser/>'
        .'</w:WordDocument>'
        .'</xml>'
        .'<![endif]-->'
        
        .'</head>'
        .'<body>'
        .'<h1><center>BaLOG Zálog</center></h1>'
        .'<h2>Kiváltási Bizonylat</h2><br/>'
        
        .'Zálogosítás ideje: '.$obj->kezd.'<br>Ügyfél azonososító: '.$obj->ugyfelazon.'<br>'
        .'Zálogjegy száma: '.$obj->id.'<br>'
        .'Megőrzés időtartama: '.$obj->ido_tart.' nap<br>'
        .'Lejárat napja: '.$obj->lejarat.'<br>'
        .'Kiváltás összege: '.$osszeg2.'Ft<br>'
        .'<h2>Részletek a beadásról: </h2><br>'
        .'Súly: '.$obj->suly.' gr<br>'
        .'Darab: '.$obj->db.' darab<br>'
        .'Fémjel: '.$obj->femjel.' <br>'
        .'Karát: '.$obj->karat.' K<br>'
        .'Megjegyzés: '.$obj->becsszoveg.'<br>'
        .'<br><br><br>'
        .'Kiváltás ideje: '.date('Y-m-d H:i:s').'<br><br>'
        .' Pecsét helye: '
 
        
        .'</body>'
        .'</html>';
 
echo $content;
    
}

?>
<form action="" method="post">
    <input type="hidden" name="zalogazon" value="<?php echo $zalogazon; ?>">
    
    <input type="submit" name="sub1" value="Nyomtatás" class="btn btn-own-sa">
</form>