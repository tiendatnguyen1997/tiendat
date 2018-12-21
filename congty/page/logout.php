<?php
session_start();

if(isset($_SESSION['ct']) && $_SESSION['ct'] != NULL){

   //kiểm tra nếu có session tên us thì xóa nó đi
    unset($_SESSION['ct']);
    header("location:../../index.php");
}

?>