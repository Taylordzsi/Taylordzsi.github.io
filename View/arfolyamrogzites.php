<?php
session_start();

   
if(isset($_SESSION['user']))
{
    include "header.html";

?>
<h2>Napi árfolyam beállítása</h2>
<div class="form-group">
<form action="../Controller/arfolyamrogzites.php" method="post">
    <label>18K Arany 30nap</label>
    <input type="number" name="au1830">
    <label>Ft</label>
<br>
    <label>14K Arany 30nap</label>
    <input type="number" name="au1430">
    <label>Ft</label>
<br>
    <label>925 Ezüst 30nap</label>
    <input type="number" name="ag92530">
    <label>Ft</label>
    <br>
<br>
    
    <label>18K Arany 90nap</label>
    <input type="number" name="au1890">
    <label>Ft</label>
<br>
    <label>14K Arany 90nap</label>
    <input type="number" name="au1490">
    <label>Ft</label>
<br>
    <label>925 Ezüst 90nap</label>
    <input type="number" name="ag92590">
    <label>Ft</label>
    
    <br><br>
    <input type="datetime" name="datum2" value="<?php echo date('Y-m-d H:i:s'); ?>" readonly><br><br>
   <input type="submit" name="sub5" value="Rögzít" class="btn-own-sa">
</form>
</div>
</body>
</html>
<?php
}
else{

}