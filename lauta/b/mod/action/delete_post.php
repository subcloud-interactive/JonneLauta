<?php


include('../../../../php/settings.php');

$id = $_POST['id'];

if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


$sql = "DELETE FROM post_b WHERE id=$id";
if(mysqli_query($conn, $sql)){
    echo "Postaus poistettu.";
    echo '<a href="../"> Takaisin </a>';
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}


mysqli_close($conn);
?>
