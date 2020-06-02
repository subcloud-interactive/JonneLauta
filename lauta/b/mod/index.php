<?php
session_start() ;
?>
<title>Home | Moderation</title>
<link rel="stylesheet" type="text/css" href="../../../css/main.css" />
<center>
<h3>Kirjaudu Sisään, Jotta Pääset Hallitsemaan Sisältöä</h3>
<b><a href="index.php">Home</a></b> | <a href="locked.php">Control Panel</a> |
<?php
if(!isset($_SESSION['auth']))
{
?>
<a href="login.php">Kirjaudu Sisään</a>
<?php
}
else
{
?>
<a href="logout.php">Kirjaudu Ulos</a>
<?php
 }
?>
<h2>Kotisivu</h2>
<?php
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
