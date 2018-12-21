<?php
	require_once("../../config.php");
	$sql = " select * from chungchi";
	$query = mysqli_query($ketnoi, $sql);
?>
<div class="input-group"> 
	
    <div class="rs-select2 js-select-simple select--no-search"> Chứng Chỉ cần có
        <select name="CC">
               <option disabled="disabled" selected="selected"  >chứng chỉ</option>
               <?php
				while ($r = mysqli_fetch_assoc($query)) 
				{   ?>
                <option value="<?php echo $r['maCC']; ?>"><?php echo $r['tenCC']; ?></option><?php } ?>
        </select>
    		<div class="select-dropdown"></div>
    </div>
</div>