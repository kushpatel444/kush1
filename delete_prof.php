<?php

include 'database.php';

$email = $_GET['email'];

$delete = "DELETE FROM visitors where visitors_email='$email'";

mysqli_query($conn,$delete);

header('Location:index.php');

?>