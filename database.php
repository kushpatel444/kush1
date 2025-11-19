<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = "moviebooking";

$conn = mysqli_connect($servername,$username,$password,"$dbname");

if(!$conn){

echo "Database Error";

}


?>