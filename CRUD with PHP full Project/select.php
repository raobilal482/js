<?php
include 'connection.php';

$query="SELECT * FROM admission_personal_information";
$ins=mysqli_query($con,$query) or die(mysqli_error($con));
?>