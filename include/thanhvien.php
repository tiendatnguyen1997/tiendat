<?php
	 function DSThanhVien()
	 {
		 define("tenSEVER","localhost");
			define("USERNAME","root");
			define("PASS","");
			define("DBNAME","timviec");
			$ketnoi = mysqli_connect(tenSEVER,USERNAME,PASS,DBNAME);
			$ketnoi->set_charset("utf8");
			$qr = "
				select * from thanhvien
			";
			 $result = mysqli_query($ketnoi, $qr);
			 return $result;
	}
?>