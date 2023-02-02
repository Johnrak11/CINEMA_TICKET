<?php   
$email = $_COOKIE['email'];
$iduser = $_COOKIE['id'];
setcookie('email',$email ,time() -360);
setcookie('email',$iduser ,time() -360);
header('location:/');//to redirect back to "index.php" after logging out
?>