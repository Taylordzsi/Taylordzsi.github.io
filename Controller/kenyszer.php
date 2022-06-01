<?php
//error_reporting(0);
include '../Model/kenyszer.classes.php';



class kenyszerView
{

public function lista()
{
    $result1=array();
    $result2=array();
    $datum=date('Y-m-d');
    $ert = new Kenyszer();
    $ert->leker($datum);

    for($i=0; $i<count($ert->vege); $i++)
        {
            if(count($ert->vege)==0)
            {
              $result2[0]="Nincs talalat";
            }
            else{
           $result1 = "

            <form action=../Controller/email.php method=post>
            <input type=text name=email value=".$ert->email[$i].">
            <input type=text name=azonosito value=".$ert->jegy[$i].">
            <input type=text name=lejarat value=".$ert->vege[$i].">
            <input type=submit value=Értesít>
            </form>";

            array_push($result2, $result1);
            $this->result2 = $result2;
        }
    }
    return $result2;
}


}
?>