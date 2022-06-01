
<?php
session_start();
if (isset($_SESSION['user']))
{

include ('header.html');
    if(isset($_POST['submit2']))
        {

                $fullname=htmlspecialchars($_POST['fullname']);
                $szulido=htmlspecialchars($_POST['szulido']);
                $szulhely=htmlspecialchars($_POST['szulhely']);
                $lakcim=htmlspecialchars($_POST['lakcim']);
                $tartozkodas=htmlspecialchars($_POST['tartozkodas']);
                $telefon=htmlspecialchars($_POST['telefon']);
                $email=htmlspecialchars($_POST['email']);
                $anyja=htmlspecialchars($_POST['anyja']);
                $szemig=htmlspecialchars($_POST['szemig']);

                 $uploaddir = 'uploads/';
                 $uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

                echo '<pre>';
                if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
                    echo "File is valid, and was successfully uploaded.\n";
                } else {
                    echo "Possible file upload attack!\n";
                }

               include '../Controller/emptyinputnewuser.php';
                $obj4 = new Newuser($fullname, $szulido, $szulhely, $lakcim, $tartozkodas, $telefon, $email, $anyja, $szemig, $uploadfile);
                $obj4->newUsers($fullname, $szulido, $szulhely, $lakcim, $tartozkodas, $telefon, $email, $anyja, $szemig, $uploadfile);


              
                }


?>
<h2>Új ügyfél felvétele</h2>
<div class="form-group"><br>
<form action="" enctype="multipart/form-data" method="post">
    <input type="text" name="fullname" placeholder="Teljes név" required="required" ><br><br>
    <input type="date" name="szulido" placeholder="Születési idő" required="required" ></br><br>
    <input type="text" name="szulhely" placeholder="Születési hely"  required="required"><br><br>
    <input type="text" name="lakcim" placeholder="Lakcím" required="required" ><br><br>
    <input type="text" name="tartozkodas" placeholder="Tartózkodási hely"><br><br>
    <input type="phone" name="telefon" placeholder="Telefon"  required="required"><br><br>
    <input type="email" name="email" placeholder="E-mail cím" required="required"><br><br>
    <input type="text" name="anyja" placeholder="Anyja neve"  required="required"><br><br>
    <input type="text" name="szemig" placeholder="Igazolvány száma"  required="required"><br><br>
    <label>Igazolvány</label><br><br>
    <input type="hidden" name="MAX_FILE_SIZE" value="9000000"> 
    <input type="file" name="userfile" required="required" >
    <br> 
    <input type="submit" value="Rögzítés" name="submit2" class="btn btn-own-sa">
<p></p>
</form>
            </div>
<?php
}


else{
    echo "nincs bejelentkezve";
}
?>
</body>
</html>