<?php

include 'database.php';

session_start();
require('checksession.php');

$email = $_GET['email'];



$sql1 = "SELECT * from visitors where visitors_email='$email'";


$result1 = mysqli_query($conn,$sql1);


$visitors = mysqli_fetch_array($result1);


if(isset($_POST['save'])){

	$visitors_name = $_POST['visitors_name'];
	$visitors_email = $_POST['visitors_email'];
	$visitors_number = $_POST['visitors_number'];
	$kid_name = $_POST['kid_name'];
	$kid_age = $_POST['kid_age'];
	$kid_grade = $_POST['kid_grade'];
	
	

	$sql = "INSERT into kid_concession(visitors_name,visitors_email,visitors_number,kid_name,kid_age,kid_grade) VALUES('$visitors_name','$visitors_email','$visitors_number','$kid_name','$kid_age','$kid_grade') ";
    
    mysqli_query($conn,$sql);

    $email = $_GET['email'];
    
    header('Location:visitors_home.php?email='.$email);
    
    }




?>

<!DOCTYPE HTML>
<html lang="zxx">
	
<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Movie Booking System</title>
		<!-- Favicon Icon -->
		<link rel="icon" type="image/png" href="images/chill.png" />
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" media="all" />
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<!-- Slick nav CSS -->
		<link rel="stylesheet" type="text/css" href="assets/css/slicknav.min.css" media="all" />
		<!-- Iconfont CSS -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
		<link rel="stylesheet" type="text/css" href="assets/css/icofont.css" media="all" />
		<!-- Owl carousel CSS -->
		<link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">
		<!-- Popup CSS -->
		<link rel="stylesheet" type="text/css" href="assets/css/magnific-popup.css">
		<!-- Main style CSS -->
		<link rel="stylesheet" type="text/css" href="assets/css/style.css" media="all" />
		<!-- Responsive CSS -->
		<link rel="stylesheet" type="text/css" href="assets/css/responsive.css" media="all" />
		
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<style>



.form-control:focus {
    box-shadow: none;
    border-color: #BA68C8
}

.profile-a {
    background: rgb(99, 39, 120);
    box-shadow: none;
    border: none
}

.profile-a:hover {
    background: #682773
}

.profile-a:focus {
    background: #682773;
    box-shadow: none
}

.profile-a:active {
    background: #682773;
    box-shadow: none
}

.back:hover {
    color: #682773;
    cursor: pointer
}

.labels {
    font-size: 11px
}

.add-experience:hover {
    background: #BA68C8;
    color: #fff;
    cursor: pointer;
    border: solid 1px #BA68C8
}

#ar{
	background: rgb(194, 1, 1);
}


@import url('https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700');

body{

}
.container1{
  width: 100%;
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto;
}
@media (min-width: 1200px)
{
  .container1{
    max-width: 1140px;
  }
}
.d-flex{
  display: flex;
  flex-direction: row;
  background: linear-gradient(to bottom right, #e3aed6 0%, #4e1a4d 100%);
  border-radius: 0 0 5px 5px;
  padding: 25px;
}
form{
  flex: 4;
}
.Yorder{
  flex: 2;
}
.title{
  background: -webkit-gradient(linear, left top, right bottom, color-stop(0, #5195A8), color-stop(100, #70EAFF));
  background: -moz-linear-gradient(top left, #5195A8 0%, #70EAFF 100%);
  background: -ms-linear-gradient(top left, #5195A8 0%, #70EAFF 100%);
  background: -o-linear-gradient(top left, #5195A8 0%, #70EAFF 100%);
  background: linear-gradient(to bottom right, #e10fad 0%, #ecbfeb 100%);
  border-radius:5px 5px 0 0 ;
  padding: 20px;
  color: #f6f6f6;
}
h2{
  margin: 0;
  padding-left: 15px; 
}
.required{
  color: red;
}
label, table{
  display: block;
  margin: 15px;
}
label>span{
  float: left;
  width: 25%;
  margin-top: 12px;
  padding-right: 10px;
}

select{
  width: 50%;
  height: 35px;
  padding: 5px 10px;
  margin-bottom: 10px;
}


table{
  margin: 0;
  padding: 0;
}
th{
  border-bottom: 1px solid #dadada;
  padding: 10px 0;
}
tr>td:nth-child(1){
  text-align: left;
  color: #2d2d2a;
}
tr>td:nth-child(2){
  text-align: right;
  color: #000000;
}
td{
  border-bottom: 1px solid #dadada;
  padding: 25px 25px 25px 0;
}

p{
  display: block;
  color: #888;
  margin: 0;
  padding-left: 25px;
}
.Yorder>div{
  padding: 15px 0; 
}

.button{
  width: 100%;
  margin-top: 10px;
  padding: 10px;
  border: none;
  border-radius: 30px;
  background: #ae1889;
  color: #fff;
  font-size: 15px;
  font-weight: bold;
  
}
.button:hover{
  cursor: pointer;
  background: #F660E1;
}

select,input{
    background: transparent;
}




		</style>
	</head>
	<!-- Page loader -->
	<div id="preloader"></div>
		<!-- header section start -->
		<header class="header">
			<div class="container">
				<div class="header-area">
					<div class="logo">
						<a href=""><img src="assets/img/logo.png" alt="logo" /></a>
					</div>
					<div class="header-right">
						<form action="#">
				
							<input type="text"/>
							<button disabled><i class="icofont icofont-search"></i></button>
						</form>
						<ul>
							<li><a href="#"><?php echo $visitors['visitors_name']; ?></a></li>
						</ul>
					</div>
					<div class="menu-area">
						<div class="responsive-menu"></div>
					    <div class="mainmenu">
						<ul id="primary-menu">
                                <li><a class="active" href="visitors_home.php?email=<?php echo $_GET['email'];?>">Home</a></li>
                                <li><a href="visitors_movie.php?email=<?php echo $_GET['email'];?>">Movies</a></li>
								<li><a href="show_time.php?email=<?php echo $_GET['email'];?>">Show Time</a></li>
                                <li><a href="kids_concession.php?email=<?php echo $_GET['email'];?>">Kids Concession</a></li>
                                <li><a href="blog.php?email=<?php echo $_GET['email'];?>">News</a></li>
								<li><a href="#"><?php echo $visitors['visitors_name'];?><i class="icofont icofont-simple-down"></i></a>
									<ul>
										<li><a href="visitors_profile.php?email=<?php echo $_GET['email'];?>">My Profile</a></li>
										<li><a href="logout.php">Log Out</a></li>
									</ul>
								</li>
                                
                            </ul>
					    </div>
					</div>
				</div>
			</div>
		</header>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>

		<div class="container1">
        <div class="title">
            <h2>Fill Detail To Book Ticket</h2>
        </div>
      <div class="d-flex">
        <form style="color:black;" action="" method="post" enctype="multipart/form-data">
          <label>
            <span class="fname">Your Name<span class="required"> * </span></span>
            <input  class="input" type="text" name="visitors_name" value="<?php echo $visitors['visitors_name']; ?>">
          </label>
          <label>
            <span class="lname">Your Email <span class="required"> *</span></span>
            <input class="input" type="email" name="visitors_email" value="<?php echo $visitors['visitors_email']; ?>">
          </label>
          <label>
            <span>Your Number</span>
            <input class="input" type="number" name="visitors_number" value="<?php echo $visitors['visitors_number']; ?>">
          </label>
          <label>
            <span>Kid Name<span class="required"> * </span></span>
            <input class="input" type="text" name="kid_name" placeholder=""  >
          </label>
          <label>
            <span>Kid Age<span class="required"> * </span></span>
            <input class="input" type="number" name="kid_age"  > 
          </label>
          <label>
          <span>Kid Grade<span class="required">  * </span></span>
            <input class="input" type="text" name="kid_grade" >
          </label>
		  
	  <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
       <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalToggleLabel">Modal 1</h5>
      </div>
      <div class="modal-body">
	  <p class="text-danger">YOUR CONCESSION REQUEST SEND TO ADMIN... <br>If You Are Eligible You Recieve An Email From Admin..
	  </p>
        
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" name="save">OK</button>
      </div>
    </div>
  </div>
   </div>

	  
		  </form>
		  	
       </div>
            <center><button data-bs-toggle="modal" href="#exampleModalToggle" role="button" class="btn btn-warning">Send Req</button></center>   
      </div>
	  <br>
		<br>
		<br>
	
		<br>

<footer class="footer">
			<div class="container">
				<div class="row">
                    <div class="col-lg-3 col-sm-6">
						<div class="widget">
							<img src="assets/img/logo.png" alt="about" />
							<p>7th Harley Place, London W1G 8LZ United Kingdom</p>
							<h6><span>Call us: </span>(+91 82006 39816</h6>
						</div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
						<div class="widget">
							<h4>Legal</h4>
							<ul>
								<li><a href="#">Terms of Use</a></li>
								<li><a href="#">Privacy Policy</a></li>
								<li><a href="#">Security</a></li>
							</ul>
						</div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
						<div class="widget">
							<h4>Account</h4>
							<ul>
								<li><a href="#">My Account</a></li>
								<li><a href="#">Watchlist</a></li>
								<li><a href="#">Collections</a></li>
								<li><a href="#">User Guide</a></li>
							</ul>
						</div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
						<div class="widget">
							<h4>Newsletter</h4>
							<p>Subscribe to our newsletter system now to get latest news from us.</p>
							<form action="#">
								<input type="text" placeholder="Enter your email.."/>
								<button>SUBSCRIBE NOW</button>
							</form>
						</div>
                    </div>
				</div>
				<hr />
			</div>
			<div class="copyright">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 text-center text-lg-left">
							<div class="copyright-content">
								<p><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></p>
							</div>
						</div>
						<div class="col-lg-6 text-center text-lg-right">
							<div class="copyright-content">
								<a href="#" class="scrollToTop">
									Back to top<i class="icofont icofont-arrow-up"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer><!-- footer section end -->
		<!-- jquery main JS -->
		<script src="assets/js/jquery.min.js"></script>
		<!-- Bootstrap JS -->
		<script src="assets/js/bootstrap.min.js"></script>
		<!-- Slick nav JS -->
		<script src="assets/js/jquery.slicknav.min.js"></script>
		<!-- owl carousel JS -->
		<script src="assets/js/owl.carousel.min.js"></script>
		<!-- Popup JS -->
		<script src="assets/js/jquery.magnific-popup.min.js"></script>
		<!-- Isotope JS -->
		<script src="assets/js/isotope.pkgd.min.js"></script>
		<!-- main JS -->
		<script src="assets/js/main.js"></script>
	</body>

</html>