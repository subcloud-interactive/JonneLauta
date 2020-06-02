<?php
include_once('../../php/settings.php');
if(isset($_POST['save']))
{
	 $first_name = $_POST['first_name'];
	 $last_name = $_POST['last_name'];
	 $city_name = $_POST['city_name'];
	 $sql = "INSERT INTO post_b (Name,Post,Kuva)
	 VALUES ('$first_name','$last_name','$city_name')";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>
