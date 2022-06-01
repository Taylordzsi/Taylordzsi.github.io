<?php
if(isset($_POST['sub']))
{
    $pass1=$_POST['pass1'];
    $pass2=$_POST['pass2'];
    $username=$_POST['username'];
    $fullname=$_POST['fullname'];
    
    $date=date('Y-m-d H:i:s');

    if($pass1==$pass2)
        {
            $pass1=password_hash($pass1, PASSWORD_DEFAULT);
            include '../Model/newadmin.classes.php';
            $ujadmin = new AdminFel();
            $ujadmin->setAdmin($pass1, $username, $fullname, $date);
            header("location: ../index.php");

        }
        else
        {
            ?>
            <script>alert('nem egyeznek a jelszavak')
                window.location.replace("../View/admininsert.php");
        </script>

            <?php
            //header("location: ../View/admininsert.php");
        }
}
?>