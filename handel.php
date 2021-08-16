<?php
session_start();

$emai="dina@gmail.com";
$pass="1234";
$uemail=$_POST['email'];
$upass=$_POST['password'];
if($emai==$uemail){
    if($pass==$upass){
    $_SESSION['is_login']=true;
}else{
   $_SESSION['error']="pass error";
}
}else{
    $_SESSION['error']="email error";
}

?>

<a href="test.php">home</a>