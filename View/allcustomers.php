<?php
session_start();
  
  if(isset($_SESSION['user']))
  {
    include "header.html";  

if(isset($_POST['sub3']))
{
  ?>
  <div class="form-group">
    <?php
    include '../Model/select.classes.php';
    $obj4 = new Lekerdezes();
    $obj4->getAll();
    ?>
    </div>
    <?php
}
else
{
?>
<div class="form-group">
<h6> Összes ügyfél listázása ABC sorrendben</h6>
<form action="" method="post">
    <input type="submit" name="sub3" value="Összes ügyfél listázása" class="btn btn-own-sa">
<p></p>
  </form>
</div>
<?php
  }

  }
else
{
    header('location: ../index.php');
}
?>
</body>
</html>