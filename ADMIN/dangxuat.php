<?PHP
session_start();
unset($_SESSION["admin"]);
header("Location: dangnhap.php");
