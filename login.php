<?php

session_start();

include 'database.php';

if(isset($_POST['email']) && isset($_POST['password'])){

$email = $_POST['email'];
$password = $_POST['password'];


    $sql = "SELECT * FROM visitors where visitors_email='$email' and visitors_password='$password'";

    $query = mysqli_query($conn,$sql);

    $sql2 = "SELECT * FROM admins where admin_email='$email' and admin_password='$password'";

    $query2 = mysqli_query($conn,$sql2);

    if(mysqli_num_rows($query) == 1){

        $row = mysqli_fetch_assoc($query);

        if ($row['visitors_email'] === $email && $row['visitors_password'] === $password) {

            echo "Logged in!";

            $_SESSION['loginID'] = $row['visitors_email'];

            $_SESSION['password'] = $row['visitors_password'];


            header('Location:visitors_home.php?email='.$email);

        }else{

            echo "<script>alert('invalid email or pw');</script>";

          

        }
}

else if(mysqli_num_rows($query2) == 1){

    $row = mysqli_fetch_assoc($query2);

    if ($row['admin_email'] === $email && $row['admin_password'] === $password) {

        echo "Logged in!";

        $_SESSION['loginID'] = $row['admin_email'];

        $_SESSION['password'] = $row['admin_password'];


        header('Location:admin_home.php?email='.$email);

    }else{

      
    echo "<script>alert('invalid email or pw');</script>";

      

    }
}

else{

    echo "<script>alert('invalid email or pw');</script>";

    

  }


    

 }

else{

    echo "please check your email name and pw name";

    

  }













?>