<?php
  if(!isset($_SESSION["ct"]))
   header("location: index.php");

	require_once("../../config.php");
	$a = $_SESSION["ct"]["macty"];
	$sql = " select maviec, tenviec, tencty from vieclam join(nhatuyendung) on vieclam.macty = nhatuyendung.macty where vieclam.macty = $a";
	$query = mysqli_query($ketnoi, $sql);
	$n = mysqli_num_rows( $query); //echo $n;
	$soviev1cot = ceil( $n/3);//echo $soviev1cot;
	$i=0;
?>
<div class="row">
	<?php
	while ($r = mysqli_fetch_assoc($query)) 
	{
		
		if ($i % $soviev1cot ==0)
			echo '<div class="col-md-4 col-sm-6 col-xs-12">
						<ul class="list-job">';
			?>
							<li>
								<a href="chitiet.php?maviec=<?php echo $r['maviec']?>">
									<h4 class="title-job">
										<?php  echo $r['tenviec']?>
									</h4>
									<p class="company">
										<?php echo $r['tencty'];   ?>
									</p>
								</a>
							</li>
			<?php
			$i++;
			if ($i % $soviev1cot ==0)
			  echo '</ul>
	</div>';
}
?>


	
</div>
