<?php

    $da=strtotime("today + 10 days");
    $datum=date('Y-m-d', $da);

    include '../Model/alarm.classes.php';
    $ert = new Alarm();
    $ert->lejarat($datum);


class AlarmView
{

    public $datum;

    
public function alarmV()
{


    $da=strtotime("today + 10 days");
    $datum=date('Y-m-d', $da);
    $this->datum = $datum;  

    $result1=array();
    $result2=array();

    $ert = new Alarm();
    $ert->lejarat($datum);

    for($i=0; $i<count($ert->email); $i++)
        {
           
           $result1 = "

            <form action=../Controller/email2.php method=post>
            <input type=text name=email value=".$ert->email[$i].">
            <input type=text name=azonosito value=".$ert->jegy[$i].">

            <input type=submit value=Értesít class=btn btn-own-sa>
            </form><br><br>";

            array_push($result2, $result1);
            $this->result2 = $result2;
        }
      
    return $result2;
}
}

?>