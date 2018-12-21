<?php
	require_once("../config.php");
	$sql = " select * from chungchi";
	$query = mysqli_query($ketnoi, $sql);
?>
<div class="input-group"> 
	
    <div class="rs-select2 js-select-simple select--no-search"> chứng chỉ bạn có: &nbsp &nbsp</br>
               <?php
				while ($r = mysqli_fetch_assoc($query)) 
				{   
              ?><input type="checkbox" name="CC[]" value="<?php echo $r['maCC'];?>"/><?php echo $r['tenCC'];?></br> <?php } ?>
        
    		<div class="select-dropdown"></div>
    </div>
</div>