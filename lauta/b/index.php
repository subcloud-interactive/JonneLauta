<?php
include('../../php/settings.php');
$sql = "SELECT * FROM post_b";
$sql2 = "INSERT INTO post_b ();";
$result = $conn->query($sql);
?>
<!doctype html>
<html>
<head>
  <title> <?php echo $config['LautaNimi']; ?> </title>
  <link rel="stylesheet" type="text/css" href="../../css/main.css" />
</head>
<body>
<h1 align="center">/b/ - Satunnainen</h1>
<table border="1" align="center" style="line-height:25px;">
<tr>
<th>PostID</th>
<th>Name</th>
<th>Post</th>
<th>Picture</th>
</tr>
<?php
//Hae tiedot
if($result->num_rows > 0){
while($row = $result->fetch_assoc()){
?>
<tr>
<td> <?php echo $row['id']; ?></td>
<td><?php echo $row['Name']; ?></td>
<td><?php echo $row['Post']; ?></td>
<td><?php echo $row['Kuva']; ?></td>
</tr>
<?php
}
}
else
{
?>
<tr>
<th colspan="2">No data found.</th>
</tr>
<?php
}
?>
</table>
<br />
<br/>
<hr />
<form method="post" action="process.php">
		Nimi:<br>
		<input type="text" name="first_name">
		<br>
		Viesti:<br>
		<input type="text" name="last_name">
		<br>
		Kuva:<br>
		<input type="text" name="city_name">
		<br>

		<br><br>
		<input type="submit" name="save" value="Post">
	</form>
</body>
</html>
