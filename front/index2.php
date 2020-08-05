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
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="assets/css/templatemo-style.css">
		<link rel="stylesheet" href="assets/css/main1.css" />
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

    <section class="services">
        <div class="container">
            <div class="row">
			  <hr><hr>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="service-item">
					 <h4 style="font-size:35px;">Fill Your Expenses Data</h4><hr><hr>
                        <a href="balance.php">
                        <img src="images/scholar.jpg">
                        <h4>Income Statement</h4>
                        </a>
                    </div>
                </div><hr><hr>
				 <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="service-item">
                        <a href="menu.html">
                        <img src="images/estate.jpg">
                        <h4>Cash Flow Statement</h4>
                        </a>
                    </div>
                </div><hr><hr>
				 <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="service-item">
                        <a href="menu.html">
                        <img src="images/business.jpg">
                        <h4> Balance Sheet</h4>
                        </a>
                    </div>
                </div><hr><hr>
                
                
            </div>
        </div>
    </section>

<script src="assets/javascript/main1.js"></script>
</body>
</html>