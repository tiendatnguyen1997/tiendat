<?php
session_start();

if(isset($_SESSION['tv']) && $_SESSION['tv'] != NULL){

   //kiểm tra nếu có session tên us thì xóa nó đi
    unset($_SESSION['tv']);
    header("location:../index.php");
}

?>