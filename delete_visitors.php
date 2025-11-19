<?php

include 'database.php';

$visitors_id = $_GET['visitors_id'];
$email = $_GET['email'];

$delete = "DELETE FROM visitors where visitors_id='$visitors_id'";

mysqli_query($conn,$delete);

header('Location:visitors_detail.php?email='.$email);

?>