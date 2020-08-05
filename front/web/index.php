<!--author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>    

<!-- meta_tags-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Library Membership form A Flat Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
	function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Meta_tag_Keywords-->
<!--css_files-->
	<link rel="stylesheet" href="css/jquery-ui.css"/>
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/><!--stylesheet-->
	<link rel="stylesheet" href="css/font-awesome.css"><!--font_wesome_icons-->
	<link href="//fonts.googleapis.com/css?family=PT+Sans+Caption" rel="stylesheet"><!--online_fonts-->
	<link href="//fonts.googleapis.com/css?family=Old+Standard+TT" rel="stylesheet"><!--online_fonts-->
	
<!--//css_files-->
</head>
<body>


<div class="w3l-head">
<h1>Planning for Higher Studies</h1>
</div>
<div class="w3ls-form">
<h2 style="color:white;">Write the detail of person for which you are planning</h2>
<form action="dbconfig.php" method="post">
		<div class="w3l-last-grid1">
			<div class="w3l-grid1">
				<label class="text">First name</label>
				<div class="w3l-div">
					<i class="fa fa-user" aria-hidden="true"></i>
					<input type="text" name="name" placeholder="first name" required=""/>
				</div>
			</div> 
			<div class="w3l-grid2">
			<label class="text">Last name</label>
			<div class="w3l-div">
				<i class="fa fa-user" aria-hidden="true"></i>
				<input type="text" name="last" placeholder="last name" required=""/>
			</div>
			</div>
			<div class="clear"></div>
		</div>	
		<div class="w3l-last-grid1">
			<div class="w3l-grid1">
				<label class="text">gender</label>
				<div class="w3l-div">
					<i class="fa fa-users" aria-hidden="true"></i>
					<select class="form-control" required="">
						<option>gender</option>
						<option>Male</option>
						<option>Female</option>
					</select>
				</div>
			</div>	
			<div class="w3l-grid2">
				<label class="text">date of birth</label>
				<div class="w3l-div">
					<i class="fa fa-calendar" aria-hidden="true"></i>
					<input type="text" class="date" id="datepicker" name="dob" placeholder="dob" value="MM/DD/YYYY" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'MM/DD/YYYY';}" required=""/>
				</div>	
			</div>	
			<div class="clear"></div>
		</div>
		<div class="w3l-last-grid1">
			<div class="w3l-grid1">
				<label class="text">Your Email</label>
				<div class="w3l-div">
					<i class="fa fa-envelope-o" aria-hidden="true"></i>
					<input type="email" name="email" placeholder="e-mail" required=""/>
				</div>
			</div>
			<div class="w3l-grid2">
				<label class="text">Mobile number</label>
				<div class="w3l-div">
					<i class="fa fa-phone" aria-hidden="true"></i>
					<input type="text" name="mobno" placeholder="mobile number" required=""/>
				</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="w3l-last-grid1">
			<div class="w3l-grid1">	
				<label class="text">address</label>
				<div class="w3l-div">
					<i class="fa fa-location-arrow" aria-hidden="true"></i>
					<input type="text" name="address" placeholder="current address" required=""/>
				</div>
			</div>
			<div class="w3l-grid2">	
				<label class="text">city</label>
				<div class="w3l-div">
					<i class="fa fa-map-marker" aria-hidden="true"></i>
					<input type="text" name="city" placeholder="city" required=""/>
				</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="w3l-last-grid1">
			<div class="w3l-grid1">	
				<label class="text">Which type of course you want to do</label>
				<div class="w3l-div">
					<i class="fa fa-location-arrow" aria-hidden="true"></i>
					<input type="text" name="course" placeholder="course name" required=""/>
				</div>
			</div>
			<div class="w3l-grid2">	
				<label class="text">You want to study in india or outside india</label>
				<div class="w3l-div">
					<i class="fa fa-map-marker" aria-hidden="true"></i>
					<input type="text" name="country" placeholder="Name the Country" required=""/>
				</div>
			</div>
			<div class="w3l-grid3">	
				<label class="text">Name the college</label>
				<div class="w3l-div">
					<i class="fa fa-map-marker" aria-hidden="true"></i>
					<input type="text" name="college" placeholder="Name the College" required=""/>
				</div>
			</div>
			
			<div class="clear"></div>
		</div>
		
		<div class="w3l-right-grid1">
			<div class="w3l-grid1">
				<label class="text"> your state</label>
				<div class="w3l-div">
					<i class="fa fa-map-marker" aria-hidden="true"></i>
					<input type="text" name="state" placeholder="state/province" required=""/>
				</div>
			</div>
			<div class="w3l-grid2">
				<label class="text">zipcode</label>
				<div class="w3l-div">
					<i class="fa fa-address-card-o" aria-hidden="true"></i>
					<input type="text" name="zipcode" placeholder="postal" required=""/>
				</div>
			</div>
			<div class="clear"></div>
		</div>
		
		
		
		<div class="w3ls-submit">
			<input type="submit" value="add a Goal">
		</div>
</form>
</div>


<!-- Default-JavaScript --> <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>

<!-- Calendar -->
<script src="js/jquery-ui.js"></script>
	<script>
		$(function() {
		$( "#datepicker,#datepicker1" ).datepicker();
		});
	</script>
<!-- //Calendar -->
</body>
</html>