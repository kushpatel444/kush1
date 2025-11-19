<?php

include 'database.php';

$concession_id = $_GET['concession_id'];
$email = $_GET['email'];

$delete = "DELETE FROM kid_concession where concession_id='$concession_id'";

mysqli_query($conn,$delete);

header('Location:concession_req.php?email='.$email);

?>