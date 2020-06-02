<?php
include('../../../php/settings.php');
session_start() ;
if(!isset($_SESSION['auth']))
{
header("Location:login.php") ;
}
?>
<title>Control Panel | Moderation</title>
<link rel="stylesheet" type="text/css" href="../../../css/main.css" />
<center>
<h3>Hallintapaneeli</h3>
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
<a href="index.php">Home</a> | <b><a href="locked.php">Control Panel</a></b> |
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
 <h2>Hallintapaneeli</h2>
 <br />
 <hr  />
 <br />
<p> Poista Postaus: </p>

<form action="./action/delete_post.php" method="post">

  <input type="text" id="id" name="id" placeholder="Postauksen ID" />
  <input type="submit" id="save" name="save" value="Delete" />

</form>

<br />

<hr />
</center>
