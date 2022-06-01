<?php
if(isset($_POST['friss']))
{
$lakhely=$_POST['lakhely'];
$tarthely=$_POST['tarthely'];
$tel=$_POST['tel'];
$email=$_POST['email'];
$id=$_POST['id'];
$szemig=$_POST['szemig'];

include '../Model/ugyfelfrissites.classes.php';
$t = new Ugyfelfrissites($lakhely, $tarthely, $tel, $email, $szemig, $id);
$t->frissit($lakhely, $tarthely, $tel, $email, $szemig, $id);
header('Location: ../index.php');
}
?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>baLog</title>
</head>
<body>
    <script>
        alert("Sikeres módosítás!");
        
    </script>
    <?php
    //header('Location: ../index.php', 30);
    ?>
</body>
</html>