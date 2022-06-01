<?php
include ('header.html');
include '../Controller/alarm.php';
$ert = new AlarmView();
$ert->alarmV();
?>
<div align="center">
    <h2> 10 nap múlva lejáró zálogjegyek</h2>
<?php
for($i=0; $i<count($ert->result2); $i++)
{
    echo $ert->result2[$i];
}

?>
</div>