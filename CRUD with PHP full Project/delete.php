<?php
include 'connection.php';
$ids=$_GET['id'];
$query="DELETE FROM admission_personal_information where id='$ids'";
$ins=mysqli_query($con,$query) or die(mysqli_error($con));
header("Location:index.php");
exit();
?>