<?php

include 'database.php';

$movie_id = $_GET['movie_id'];
$email = $_GET['email'];

$delete = "DELETE FROM movies where movie_id='$movie_id'";

mysqli_query($conn,$delete);

header('Location:view_movie.php?email='.$email);

?>