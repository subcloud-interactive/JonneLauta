<title>Login</title>
<center>
<h3>Kirjaudu Sisään</h3>
<a href="index.php">Home</a> | <a href="locked.php">Control Panel</a> |
<link rel="stylesheet" type="text/css" href="../../../css/main.css" />
<?php
if(!isset($_SESSION['auth']))
{
?>
<b><a href="login.php">Kirjaudu Sisään</a> </b>
<?php
}
else
{
?>
 <b><a href="logout.php">Kirjaudu Ulos</a></b>
 <?php
 }
 ?>
<?php
session_start() ;
if(isset($_SESSION['success']))
{
?>
<div class="success">
<?php echo $_SESSION['success'] ; ?>
</div>
<?php
unset($_SESSION['success']) ;
}
if(isset($_SESSION['failure']))
{
?>
<div class="failure">
<?php echo $_SESSION['failure'] ;?>
</div>
<?php
unset($_SESSION['failure']) ;
}
?>
 <h2>Kirjautuminen</h2>
<div class="form">
<form action="loggingin.php" method="post">
Username: <input type="text" name="user_id"><br>
Password : <input type="password" name="user_passwd"><br>
<input type="submit" value="login"><br>
</form>
</div>
</center>
<style>
.form{
    border: 1px solid #D3D3D3;
    text-align: center;
    width: 200px;
}
.success{
    background: none repeat scroll 0 0 #90EE90;
    width: 200px;
	border: 1px solid darkgreen ;
}
.failure{
background: none repeat scroll 0 0 #E56255 ;
 width: 200px;
	border: 1px solid red ;
}
</style>
