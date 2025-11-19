<?php
include 'database.php';

$ticket_id = $_GET['ticket_id'];
$email = $_GET['email'];

// First, get the booking details to know how many seats to release
$get_booking = "SELECT quantity, movie_id FROM bookticket WHERE ticket_id = '$ticket_id'";
$booking_result = mysqli_query($conn, $get_booking);
$booking_data = mysqli_fetch_array($booking_result);

if($booking_data) {
    $quantity = $booking_data['quantity'];
    $movie_id = $booking_data['movie_id'];
    
    // Calculate number of people from quantity
    $people_count = 0;
    preg_match_all('/(\d+)/', $quantity, $matches);
    if(!empty($matches[0])) {
        foreach($matches[0] as $num) {
            $people_count += (int)$num;
        }
    }
    
    // Delete the ticket
    $delete_query = "DELETE FROM bookticket WHERE ticket_id = '$ticket_id'";
    
    if(mysqli_query($conn, $delete_query)) {
        // Update the total_booked count in movies table (decrease it)
        $update_query = "UPDATE movies SET total_booked = total_booked - $people_count WHERE movie_id = '$movie_id'";
        mysqli_query($conn, $update_query);
        
        // Make sure total_booked doesn't go negative
        $fix_query = "UPDATE movies SET total_booked = 0 WHERE movie_id = '$movie_id' AND total_booked < 0";
        mysqli_query($conn, $fix_query);
        
        echo "<script>
            alert('Ticket cancelled successfully! $people_count seats released.');
            window.location.href = 'book_ticket.php?email=$email';
        </script>";
    } else {
        echo "<script>
            alert('Failed to cancel ticket!');
            window.location.href = 'book_ticket.php?email=$email';
        </script>";
    }
} else {
    echo "<script>
        alert('Ticket not found!');
        window.location.href = 'book_ticket.php?email=$email';
    </script>";
}
?>