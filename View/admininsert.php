
<?php
session_start();

   
if(isset($_SESSION['user']))
{
    include "header.html";
?>
<div class="form-group">
<form action="../Controller/admininsert.php" method="post">
    <p>Felhasználónév</p>
    <input type="text" name="username" required="required">
    <p>Jelszó</p>
    <input type="password" name="pass1" required="required">
    <p>Jelszó mégegyszer</p>
    <input type="password" name="pass2" required="required">
    <p>Teljes név</p>
    <input type="text" name="fullname" required="required">
    <p><input type="submit" name="sub" value="Rögzít" class="btn-own-sa"></p>
</form>
</div>
<?php
}
else
{
echo "nincs bejelentkezve";
}
?>