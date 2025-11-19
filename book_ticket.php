<?php
session_start();
require('checksession.php');
include 'database.php';

$email = $_GET['email'];
$query = "SELECT * from admins where admin_email = '$email'";
$res = mysqli_query($conn,$query);
$data = mysqli_fetch_array($res);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
.header {
  background-color: #a06ce0;
  color: white;
  font-size: 1.5em;
  padding: 1rem;
  text-align: center;
  text-transform: uppercase;
}

.img {
  border-radius: 50%;
  height: 60px;
  width: 60px;
}

.table-users {
  border: 1px solid #327a81;
  border-radius: 10px;
  box-shadow: 3px 3px 0 rgba(0, 0, 0, 0.1);
  max-width: calc(100% - 2em);
  margin: 1em auto;
  overflow: hidden;
  width: auto;
}

table {
  width: 100%;
}
table td, table th {
  color: #2b686e;
  padding: 10px;
}
table td {
  text-align: center;
  vertical-align: middle;
}
table td:last-child {
  font-size: 0.95em;
  line-height: 1.4;
  text-align: left;
}
table th {
  background-color: #c3a2ed;
  font-weight: 300;
}
table tr:nth-child(2n) {
  background-color: white;
}
table tr:nth-child(2n+1) {
  background-color: #edf7f8;
}

.seats-info {
  padding: 5px 10px;
  border-radius: 5px;
  font-weight: bold;
}
.seats-available {
  background-color: #d4edda;
  color: #155724;
}
.seats-limited {
  background-color: #fff3cd;
  color: #856404;
}
.seats-full {
  background-color: #f8d7da;
  color: #721c24;
}

@media screen and (max-width: 700px) {
  table, tr, td {
    display: block;
  }

  td:first-child {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    width: 100px;
  }
  td:not(:first-child) {
    clear: both;
    margin-left: 100px;
    padding: 4px 20px 4px 90px;
    position: relative;
    text-align: left;
  }
  td:not(:first-child):before {
    color: #91ced4;
    content: "";
    display: block;
    left: 0;
    position: absolute;
  }
  td:nth-child(2):before {
    content: "Name:";
  }
  td:nth-child(3):before {
    content: "Email:";
  }
  td:nth-child(4):before {
    content: "Phone:";
  }
  td:nth-child(5):before {
    content: "Comments:";
  }

  tr {
    padding: 10px 0;
    position: relative;
  }
  tr:first-child {
    display: none;
  }
}
@media screen and (max-width: 500px) {
  .header {
    background-color: transparent;
    color: white;
    font-size: 2em;
    font-weight: 700;
    padding: 0;
    text-shadow: 2px 2px 0 rgba(0, 0, 0, 0.1);
  }

  .img {
    border: 3px solid;
    border-color: #daeff1;
    height: 100px;
    margin: 0.5rem 0;
    width: 100px;
  }

  td:first-child {
    background-color: #c8e7ea;
    border-bottom: 1px solid #91ced4;
    border-radius: 10px 10px 0 0;
    position: relative;
    top: 0;
    transform: translateY(0);
    width: 100%;
  }
  td:not(:first-child) {
    margin: 0;
    padding: 5px 1em;
    width: 100%;
  }
  td:not(:first-child):before {
    font-size: 0.8em;
    padding-top: 0.3em;
    position: relative;
  }
  td:last-child {
    padding-bottom: 1rem !important;
  }

  tr {
    background-color: white !important;
    border: 1px solid #6cbec6;
    border-radius: 10px;
    box-shadow: 2px 2px 0 rgba(0, 0, 0, 0.1);
    margin: 0.5rem 0;
    padding: 0;
  }

  .table-users {
    border: none;
    box-shadow: none;
    overflow: visible;
  }
}
.logo{
  width:250px;
}
</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light " style="background-color: #b183f6 ;">
  <div class="container-fluid"> 
    <a id="av" class="navbar-brand" href=""><img class="logo" width="250px" src="images/admin.png" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul id="ab"  class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="admin_home.php?email=<?php echo $_GET['email']; ?>">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Movie
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="view_movie.php?email=<?php echo $_GET['email']; ?>">View Movie</a></li>
            <li><a class="dropdown-item" href="add_movie.php?email=<?php echo $_GET['email']; ?>">Add Movie</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Admin
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="admin_detail.php?email=<?php echo $_GET['email']; ?>">Admin Details</a></li>
            <li><a class="dropdown-item" href="create_admin.php?email=<?php echo $_GET['email']; ?>">Create Admin</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="visitors_detail.php?email=<?php echo $_GET['email'];?>">Visitors Details</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="book_ticket.php?email=<?php echo $_GET['email'];?>">Book Tickets</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="concession_req.php?email=<?php echo $_GET['email'];?>">kids Concession</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link active dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-check" viewBox="0 0 16 16">
          <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514ZM11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"/>
          <path d="M8.256 14a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1h5.256Z"/>
          </svg>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#"><?php echo $data['admin_name']; ?><svg xmlns="http://www.w3.org/2000/svg" width="16" height="18" color="blue" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
            </svg></a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="logout.php">LOGOUT</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      </form>
    </div>
  </div>
</nav>

<div class="table-users">
   <div class="header">Book Ticket</div>
   <thead>
   <table cellspacing="0">
      <tr>
         <th>Ticket id</th>
         <th>Visitor Name</th>
         <th>Visitor Email</th>
         <th>Visitor Number</th>
         <th>Movie Name</th>
         <th>Quantity</th>
         <th>Movie id</th>
         <th>Seat Class</th>
         <th>Ticket Price</th>
         <th>Payment Method</th>
         <th>Movie Date</th>
         <th>Movie Time</th>
         <th>Cinema</th>
         <th>Seats Status</th>
         <th>Cancel</th>
      </tr>
</thead>

  <tbody>
  <?php
include 'database.php';

// Get all bookings with movie seat information
$sql = "SELECT bt.*, m.total_booked 
        FROM bookticket bt 
        LEFT JOIN movies m ON bt.movie_id = m.movie_id";

$query = mysqli_query($conn,$sql);

while($arr = mysqli_fetch_array($query))
{
    // Calculate seats remaining
    $total_booked = $arr['total_booked'] ? $arr['total_booked'] : 0;
    $seats_remaining = 30 - $total_booked;
    
    // Determine status class
    if($seats_remaining > 15) {
        $status_class = 'seats-available';
        $status_text = "$seats_remaining seats left";
    } else if($seats_remaining > 5) {
        $status_class = 'seats-limited';
        $status_text = "$seats_remaining seats left";
    } else if($seats_remaining > 0) {
        $status_class = 'seats-limited';
        $status_text = "Only $seats_remaining seats!";
    } else {
        $status_class = 'seats-full';
        $status_text = "FULL";
    }
?>
      <tr>
         <td><?php echo $arr['ticket_id']; ?></td>
         <td><?php echo $arr['visitors_name']; ?></td>
         <td><?php echo $arr['visitors_email']; ?></td>
         <td><?php echo $arr['visitors_number']; ?></td>
         <td><?php echo $arr['movie_name']; ?></td>
         <td><?php echo $arr['quantity']; ?></td>
         <td><?php echo $arr['movie_id']; ?></td>
         <td><?php echo $arr['seat_class']; ?></td>
         <td><?php echo $arr['ticket_price']; ?></td>
         <td><?php echo $arr['payment_method']; ?></td>
         <td><?php echo $arr['movie_date']; ?></td>
         <td><?php echo $arr['movie_time']; ?></td>
         <td><?php echo $arr['movie_cinema']; ?></td>
         <td><span class="seats-info <?php echo $status_class; ?>"><?php echo $status_text; ?></span></td>
         <td><a href="delete_ticket.php?ticket_id=<?php echo $arr['ticket_id']; ?>&email=<?php echo $_GET['email'] ?>"><i class='fa fa-times' style='font-size:24px;color:darkred'></i></a></td>
      </tr>
<?php
}
?>
  </tbody>
   </table>
</div>

</body>
</html>