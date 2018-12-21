<?php
   function CV()
   {
     define("tenSEVER","localhost");
      define("USERNAME","root");
      define("PASS","");
      define("DBNAME","timviec");
      $ketnoi = mysqli_connect(tenSEVER,USERNAME,PASS,DBNAME);
      $ketnoi->set_charset("utf8");
      $qr = "
        select cv.*,ten from cv, thanhvien where cv.maTV = thanhvien.maTV
      ";
       $result = mysqli_query($ketnoi, $qr);
       return $result;
  }
?>