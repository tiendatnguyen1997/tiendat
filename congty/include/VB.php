<?php
  require_once("../../config.php");
  $sql = " select * from vanbang";
  $query = mysqli_query($ketnoi, $sql);
?>
<div class="input-group"> 
    <div class="rs-select2 js-select-simple select--no-search"> bằng cấp cao nhất &nbsp &nbsp &nbsp &nbsp
        <select name="BC">
               <option disabled="disabled" selected="selected" >bằng cấp</option>
               <?php
        while ($r = mysqli_fetch_assoc($query)) 
        {   ?>
                <option value="<?php echo $r['maVB']; ?>"><?php echo $r['tenVB']; ?></option><?php } ?>
        </select>
        <div class="select-dropdown"></div>
    </div>
</div>