<?php
	define("tenSEVER","localhost");
	define("USERNAME","root");
	define("PASS","");
	define("DBNAME","timviec");
	$ketnoi = mysqli_connect(tenSEVER,USERNAME,PASS,DBNAME);
	$ketnoi->set_charset("utf8");
	if($ketnoi)
	{
	
	}
	else{
			die("loi: " .mysqli_connect_errno());
		}
?>
