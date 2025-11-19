<?php
include 'database.php';

if(isset($_GET['movie_id'])) {
    $movie_id = $_GET['movie_id'];
    
    $query = "SELECT total_booked FROM movies WHERE movie_id = '$movie_id'";
    $result = mysqli_query($conn, $query);
    
    if($result && mysqli_num_rows($result) > 0) {
        $data = mysqli_fetch_array($result);
        $total_booked = $data['total_booked'] ? $data['total_booked'] : 0;
        $seats_remaining = 30 - $total_booked;
        
        echo json_encode([
            'success' => true,
            'total_booked' => $total_booked,
            'seats_remaining' => $seats_remaining,
            'seats_available' => $seats_remaining > 0
        ]);
    } else {
        echo json_encode([
            'success' => false,
            'message' => 'Movie not found'
        ]);
    }
} else {
    echo json_encode([
        'success' => false,
        'message' => 'Movie ID not provided'
    ]);
}
?>