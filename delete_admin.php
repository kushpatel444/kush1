<?php

include 'database.php';

$admin_id = $_GET['admin_id'];
$email = $_GET['email'];

$delete = "DELETE FROM admins where admin_id='$admin_id'";

mysqli_query($conn,$delete);

header('Location:admin_detail.php?email='.$email);

?>