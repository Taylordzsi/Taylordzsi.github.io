<?php
include 'header.html';
?>
 <h2>Kényszerre küldendő</h2>
<div class="form-group">
   
<form action="../Controller/olvasztas.php" method="post">
    <p>Év</p>
<select name="ev">
        <option value="<?php echo date('Y')-1;?>"><?php echo date('Y')-1;?></option>
        <option value="<?php echo date('Y');?>"><?php echo date('Y');?></option>
     
   
    </select>
    <p>Hónap</p>
    <select name="honap">
        <option value="-01-01">Január </option>
        <option value="-02-01">Február </option>
        <option value="-03-01">Március </option>
        <option value="-04-01">Április </option>
        <option value="-05-01">Május </option>
        <option value="-06-01">Június </option>
        <option value="-07-01">Július </option>
        <option value="-08-01">Augusztus </option>
        <option value="-09-01">Szeptember </option>
        <option value="-10-01">Október </option>
        <option value="-11-01">November </option>
        <option value="-12-01">December</option>
   
    </select>
    <p></p>
<input type="hidden" name="ido" value="<?php echo date('Y-m-d');?>">
<input type="submit" value="Kényszerre küldendő" class="btn-own-sa"> 
<p></p>
</form>
</div>