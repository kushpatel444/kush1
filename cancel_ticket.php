<?php

include 'database.php';

$ticket_id = $_GET['ticket_id'];
$email = $_GET['email'];

$delete = "DELETE FROM bookticket where ticket_id='$ticket_id'";

mysqli_query($conn,$delete);

header('Location:tickets.php?email='.$email);

?>