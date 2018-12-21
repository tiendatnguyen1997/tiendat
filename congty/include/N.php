<?php
	require_once("../../config.php");
	$sql = " select * from nganh";
	$query = mysqli_query($ketnoi, $sql);
?>
<div class="input-group"> 
    <div class="rs-select2 js-select-simple select--no-search"> ngành bạn học &nbsp &nbsp &nbsp &nbsp
        <select name="N">
               <option disabled="disabled" selected="selected" >ngành</option>
               <?php
				while ($r = mysqli_fetch_assoc($query)) 
				{   ?>
                <option value="<?php echo $r['manganh']; ?>"><?php echo $r['tennganh']; ?></option><?php } ?>
        </select>
    		<div class="select-dropdown"></div>
    </div>
</div>