<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<html>


	<head>
		<title>Pune Smart city</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="front/assets/css/main1.css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	</head>
	<body>

<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    
</div>
<div id="mySidenav" class="sidenav" class="w3-padding w3-xlarge w3-text-orange">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
 <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p style="font-size:24px;">Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="login.php?logout='1'" style="color: white;"><button style="font-size:20px;color:green">Logout <i class="fa fa-user-circle-o"></i></button></a> </p>

    <?php endif ?>
  <a class="active" href="#"><i class="fa fa-fw fa-home"></i> Home</a> 
 
  <a href="#"><i class="fa fa-fw fa-envelope"></i> Contact</a> 
  <a href="#"><i class="fa fa-fw fa-user"></i> Login</a>

</div>



<div class="topnav" >
<a class="active" href="#home"><span style="font-size:15px;cursor:pointer" onclick="openNav()">&#9776;</span></a>
  <a class="active" href="#home">MyAdvisor</a>
  <input style="height:40px;width:150px;" type="text" placeholder="Search..">
  <a href="#"><i class="fa fa-fw fa-search" style="font-size:20px;color:blue;"></i> </a> 
   <a href="#"><i class="fa fa-fw fa-bell" style="font-size:20px;color:blue;"></i> </a> 
 

</div>


<div class="w3-content w3-display-container" style="position:static">
  <img class="mySlides" src="front/images/pic01.jpg" style="width:100%;height:200px;">
  <img class="mySlides" src="front/images/pic03.jpg" style="width:100%;height:200px;">
  <img class="mySlides" src="front/images/pic05.jpg" style="width:100%;height:200px">
  <img class="mySlides" src="front/images/pic07.jpg" style="width:100%;height:200px">
  <img class="mySlides" src="front/images/pic02.jpg" style="width:100%;height:200px;">
  <img class="mySlides" src="front/images/pic04.jpg" style="width:100%;height:200px;">
  <img class="mySlides" src="front/images/pic06.jpg" style="width:100%;height:200px">
  <img class="mySlides" src="front/images/pic08.jpg" style="width:100%;height:200px">

<!-- <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>-->
</div>



<script>
// Automatic Slideshow - change image every 3 seconds
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 5000);
}
</script>



<div class="scrollmenu">
 
  <a href="calendar/displaygoal.php"><i class="fa fa-street-view" style="font-size:55px;color:blue;width:80px;height:60px;background: #fff; border-radius: 100px;"><h6><b>My Goal</b></h6></i></a> 
   <a href="front/mail/index.html"><i class="fa fa-pagelines" style="font-size:55px;color:red;width:80px;height:60px;background: #fff; border-radius: 100px;"><h6><b>Mail us</b></h6></i> </a> 
  <a href="#"><i class="fa fa-hospital-o" style="font-size:55px;color:#306bff;width:80px;height:60px;background: #fff; border-radius: 100px;"><h6><b>Transaction</b></h6></i></a> 
   <a href="#"><i class="fa fa-address-book-o" style="font-size:55px;color:orange;width:80px;height:60px;background: #fff; border-radius: 100px;"><h6><b>History</b></h6></i> </a> 
  <a href="calendar/index.php"><i class="fa fa-calendar-check-o" style="font-size:55px;color:brown;width:80px;height:60px;background: #fff; border-radius: 100px;"><h6><b>Imp Dates</b></h6></i></a> 
    <a href="front/index2.php"><i class="fa fa-snowflake-o" style="font-size:55px;color:blue;width:80px;height:60px;background: #fff; border-radius: 100px;"><h6><b>Statement</b></h6></i></a> 
   <a href="#"><i class="fa fa-group" style="font-size:55px;color:red;width:80px;height:60px;background: #fff; border-radius: 100px;"><h6><b>My FA</b></h6></i> </a> 
  <a href="#"><i class="fa fa-gift" style="font-size:55px;color:brown;width:80px;height:60px;background: #fff; border-radius: 100px;"><h6><b>Offer</b></h6></i></a> 
   <a href="#"><i class="fa fa-balance-scale" style="font-size:55px;color:#306bff;width:80px;height:60px;background: #fff; border-radius: 100px;"><h6><b>Report</b></h6></i> </a> 
  <a href="#"><i class="fa fa-inr" style="font-size:55px;color:#d9ff31;width:80px;height:60px;background: #fff; border-radius: 100px;"><h6><b>Revenue</b></h6></i></a> 
 
					
</div>
<div>
<a href="front/index.php"><button class="button button1">Set A Goal</button></a>
<button class="button button2">Find Personal Advisor</button>
<button class="button button3">Chat with Personal Advisor</button>
<button class="button button4">Get Fund</button>
<button class="button button5">Get Insurance</button>
</div>
<div class="row">
  <div class="column">
    <div class="card">
      <p><i class="fa fa-user"></i></p>
      <h3>11+</h3>
      <p>Partners</p>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <p><i class="fa fa-check"></i></p>
      <h3>55+</h3>
      <p>Task Completed</p>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <p><i class="fa fa-smile-o"></i></p>
      <h3>500+</h3>
      <p>Happy Clients</p>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <p><i class="fa fa-coffee"></i></p>
      <h3>100+</h3>
      <p>Certified Financial Advisor</p>
    </div>
  </div>
</div>





<script src="front/assets/javascript/main1.js"></script>
	</body>
</html>