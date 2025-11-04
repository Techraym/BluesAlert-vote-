<?php

include_once("conn.php");

//get data and check the email
$email = $_GET['email'];
$conn = conn();
$q = "SELECT email FROM users WHERE email = '$email'";
$r = mysqli_query($conn,$q) or DIE (mysqli_error());
$numRows = mysqli_num_rows($r);
if($numRows > 0) echo json_encode(false); else echo json_encode(true);
?>