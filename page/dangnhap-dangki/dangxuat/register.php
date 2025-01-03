<?php
session_start();
session_destroy();
header("Location: ../dangnhap/dangnhap.php");
exit();
?>