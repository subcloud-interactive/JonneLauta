<?php
include('../../../php/settings.php');
session_start() ;
$user_id = $_POST['user_id'] ;
$user_passwd = $_POST['user_passwd'] ;
if($user_id ==$config['Admin'] && $user_passwd ==$config['AdminPW'])
{
$_SESSION['success'] =  "Successfully Logged In";
$_SESSION['auth'] = 1 ;
header("Location:index.php") ;
}
else
{
$_SESSION['failure'] =  "Incorrect";
header("Location:login.php") ;
}
?>
