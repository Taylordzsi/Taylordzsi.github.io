<?php
if(isset($_POST['sub5']))
{
    
    $au1890=$_POST['au1890'];
    $au1490=$_POST['au1490'];
    $ag92590=$_POST['ag92590'];
    $ag92530=$_POST['ag92530'];
    $au1830=$_POST['au1830'];
    $au1430=$_POST['au1430'];

    $datum2=$_POST['datum2'];
    include 'arfolyaminput.php';
    $obj = new Arfolyam($au1890, $au1830, $au1490, $au1430, $ag92590, $ag92530, $datum2);
    $obj->arfolyamInput();
    
    /*include '../Model/arfolyam.classes.php';
    $obj5 = new Felvetel($au1890, $au1830, $au1490, $au1430, $ag92590, $ag92530, $datum2);
    $obj5->Arfolyam($au1890, $au1830, $au1490, $au1430, $ag92590, $ag92530, $datum2);
    header('Location: ../index.php');*/
}
?>