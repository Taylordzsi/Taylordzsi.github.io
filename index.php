<?php
session_start();
include "header.html";

    if (isset($_POST['sub'])) {

        $user = htmlspecialchars($_POST['user']);
        $pwd = htmlspecialchars($_POST['pwd']);
        $datum = $_POST['datum'];


        include 'Controller/emptyinputlogin.php';
        $log = new Login2($user, $pwd);
        $log->logInput($user, $pwd);

        include 'Model/admincheck.classes.php';
        $login2 = new Login();
        $login2->getUser($user, $pwd);
    }

    if (isset($_SESSION['user']))
     {
   

    } 
    else 
    {

    ?>



        <div class="form-group">
            <form action="index.php" method="post" >

                <label for="user">Admin neve:</label>
                <p><input type="text" name="user" id="user"></p>
                <p>Jelszó:</p>
                <p><input type="password" name="pwd" ></p>
                <input type="hidden" name="datum" value="<?php echo date('Y-m-d H:i:s'); ?>">
                <p><input type="submit" value="Bejelentkezés" name="sub" class="btn-own-sa"></p>
            </form>

        </div>


    <?php
    }

    ?>


    </div>
   
</body>

</html>