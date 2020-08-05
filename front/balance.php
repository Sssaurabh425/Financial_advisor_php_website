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
<html lang="en">
<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		
        <link rel="stylesheet" href="assets/css/templatemo-style.css">
		<link rel="stylesheet" href="assets/css/main1.css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		
	<script type='text/javascript' src='js/jquery-1.3.2.min.js'></script>
	<script type='text/javascript' src='js/example.js'></script>
	<script src="https://code.jquery.com/jquery-1.12.3.min.js"></script>
		    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/0.9.0rc1/jspdf.min.js"></script>
	    <link rel="stylesheet" href="balance.css" />
<script language="javascript">

function add1()
{var a=parseInt(document.form1.t11.value);
var b=parseInt(document.form1.t12.value);
var c=parseInt(document.form1.t13.value);
var d=parseInt(document.form1.t14.value);
var e=parseInt(document.form1.t15.value);
var f=a+b+c+d+e;

document.form1.t16.value=f;
}
function add2()
{var a=parseInt(document.form1.t21.value);
var b=parseInt(document.form1.t22.value);
var c=parseInt(document.form1.t23.value);
var d=parseInt(document.form1.t24.value);
var e=parseInt(document.form1.t25.value);
var f=a+b+c+d+e;

document.form1.t26.value=f;
}

window.onload = function() {
var dps = []; //dataPoints. 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	title: {
		text: "Desktop Search Engine Market Share - 2016"
	},
	data: [{
		type: "pie",
		startAngle: 240,
		yValueFormatString: "##0.00\"%\"",
		indexLabel: "{label} {y}",
		dataPoints:dps
	}]
});
function addDataPointsAndRender() {
                xValue = Number(document.getElementById("t16").value);
                yValue = Number(document.getElementById("t26").value);
                dps.push(
                    {y: xValue, label: "2017"},
			{y: yValue, label: "2018"}
                );
                chart.render();
            }

            var renderButton = document.getElementById("renderButton");
            renderButton.addEventListener("click", addDataPointsAndRender);


}
</script>
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
<div id="content">
<div class="table-title">
<h3>Income Statement</h3>
</div>
<form name="form1">
<table class="table-fill">
<thead>
<tr>
<th class="text-left">Revenue</th>
<th class="text-left">2017</th>
<th class="text-left">2016</th>
</tr>
</thead>

<tbody class="table-hover">
<tr>
<td class="text-left"><b>Sales Revenue</b></td>
<td class="text-left"><input class="inputsize" type="text" value="0" name="t11" onBlur="add1()"></td>
<td class="text-left"><input class="inputsize" type="text" value="0" name="t21" onBlur="add2()"></td>
</tr>
<tr>
<td class="text-left"><b>(less sakes return and allowances)</b></td>
<td class="text-left"><input class="inputsize" type="text" value="0" name="t12" onBlur="add1()"></td>
<td class="text-left"><input class="inputsize" type="text" value="0" name="t22" onBlur="add2()"></td>
</tr>
<tr>
<td class="text-left"><b>Services revenue</b></td>
<td class="text-left"><input class="inputsize" type="text" value="0" name="t13" onBlur="add1()"></td>
<td class="text-left"><input class="inputsize" type="text" value="0" name="t23" onBlur="add2()"></td>
</tr>
<tr>
<td class="text-left"><b>Interest revenue</b></td>
<td class="text-left"><input class="inputsize" type="text" value="0" name="t14" onBlur="add1()"></td>
<td class="text-left"><input class="inputsize" type="text" value="0" name="t24" onBlur="add2()"></td>
</tr>
<tr>
<td class="text-left"><b>Other Revenue</b></td>
<td class="text-left"><input class="inputsize" type="text" value="0" name="t15" onBlur="add1()"></td>
<td class="text-left"><input class="inputsize" type="text" value="0" name="t25" onBlur="add2()"></td>
</tr>
<tr>
<td class="text-left" style="background:#faffac;"><b>Total Revenue</b></td>
<td class="text-left" style="background:#faffac;"><input disabled class="inputsize"  type="text" id="t16"></td>
<td class="text-left" style="background:#faffac;"><input disabled class="inputsize"  type="text" id="t26"></td>
</tr>
</tbody>
</table> 
</form> 


<button id="renderButton">GENERATE PIE FOR TOTAL REVENUE</button>
    <div id="chartContainer" style="height: 270px; width: 100%;">
    </div>

	
<form name="form2">
<table class="table-fill">
<thead>
<tr>
<th class="text-left">Expenses</th>
<th class="text-left">2017</th>
<th class="text-left">2016</th>
</tr>
</thead>

<tbody class="table-hover">
<tr>
<td class="text-left"><b>Advertising</b></td>
<td class="text-left"><input class="inputsize" type="text" value="0" name="t41" onBlur="add()"></td>
<td class="text-left"><input class="inputsize" type="text" value="0" name="t51" onBlur="add()"></td>
</tr>
<tr>
<td class="text-left"><b>Bad debt</b></td>
<td class="text-left"><input class="inputsize" type="text" value="0" name="t42" onBlur="add()"></td>
<td class="text-left"><input class="inputsize" type="text" value="0" name="t52" onBlur="add()"></td>
</tr>
<tr>
<td class="text-left"><b>Commisions</b></td>
<td class="text-left"><input class="inputsize" type="text" value="0" name="t43" onBlur="add()"></td>
<td class="text-left"><input class="inputsize" type="text" value="0" name="t53" onBlur="add()"></td>
</tr>
<tr>
<td class="text-left"><b>Cost of goods sold</b></td>
<td class="text-left"><input class="inputsize" type="text" value="0" name="t44" onBlur="add()"></td>
<td class="text-left"><input class="inputsize" type="text" value="0" name="t54" onBlur="add()"></td>
</tr>
<tr>
<td class="text-left"><b>Depreciation</b></td>
<td class="text-left"><input class="inputsize" type="text" value="0" name="t45" onBlur="add()"></td>
<td class="text-left"><input class="inputsize" type="text" value="0" name="t55" onBlur="add()"></td>
</tr>
<tr>
<td class="text-left"><b>Employee benifits</b></td>
<td class="text-left"><input class="inputsize" type="text" value="0" name="t46" onBlur="add()"></td>
<td class="text-left"><input class="inputsize" type="text" value="0" name="t56" onBlur="add()"></td>
</tr>
<tr>
<td class="text-left"><b>Furniture and equipment</b></td>
<td class="text-left"><input class="inputsize" type="text" value="0" name="t47" onBlur="add()"></td>
<td class="text-left"><input class="inputsize" type="text" value="0" name="t57" onBlur="add()"></td>
</tr>
<tr>
<td class="text-left"><b>Insurance</b></td>
<td class="text-left"><input class="inputsize" type="text" value="0" name="t48" onBlur="add()"></td>
<td class="text-left"><input class="inputsize" type="text" value="0" name="t58" onBlur="add()"></td>
</tr>
<tr>
<td class="text-left"><b>Interest expenses</b></td>
<td class="text-left"><input class="inputsize" type="text" value="0" name="t49" onBlur="add()"></td>
<td class="text-left"><input class="inputsize" type="text" value="0" name="t59" onBlur="add()"></td>
</tr>
<tr>
<td class="text-left"><b>Maintenance and repairs</b></td>
<td class="text-left"><input class="inputsize" type="text" value="0" name="t61" onBlur="add()"></td>
<td class="text-left"><input class="inputsize" type="text" value="0" name="t62" onBlur="add()"></td>
</tr>
<tr>
<td class="text-left"><b>Office supplies</b></td>
<td class="text-left"><input class="inputsize" type="text" value="0" name="t63" onBlur="add()"></td>
<td class="text-left"><input class="inputsize" type="text" value="0" name="t64" onBlur="add()"></td>
</tr>
<tr>
<td class="text-left"><b>Payroll taxes</b></td>
<td class="text-left"><input class="inputsize" type="text" value="0" name="t65" onBlur="add()"></td>
<td class="text-left"><input class="inputsize" type="text" value="0" name="t66" onBlur="add()"></td>
</tr>
<tr>
<td class="text-left"><b>Rent</b></td>
<td class="text-left"><input class="inputsize" type="text" value="0" name="t67" onBlur="add()"></td>
<td class="text-left"><input class="inputsize" type="text" value="0" name="t68" onBlur="add()"></td>
</tr>
<tr>
<td class="text-left"><b>Research and development</b></td>
<td class="text-left"><input class="inputsize" type="text" value="0" name="t69" onBlur="add()"></td>
<td class="text-left"><input class="inputsize" type="text" value="0" name="t70" onBlur="add()"></td>
</tr>
<tr>
<td class="text-left"><b>Salaries and wages</b></td>
<td class="text-left"><input class="inputsize" type="text" value="0" name="t71" onBlur="add()"></td>
<td class="text-left"><input class="inputsize" type="text" value="0" name="t72" onBlur="add()"></td>
</tr>
<tr>
<td class="text-left"><b>Software</b></td>
<td class="text-left"><input class="inputsize" type="text" value="0" name="t73" onBlur="add()"></td>
<td class="text-left"><input class="inputsize" type="text" value="0" name="t77" onBlur="add()"></td>
</tr>
<tr>
<td class="text-left"><b>Travel</b></td>
<td class="text-left"><input class="inputsize" type="text" value="0" name="t78" onBlur="add()"></td>
<td class="text-left"><input class="inputsize" type="text" value="0" name="t79" onBlur="add()"></td>
</tr>
<tr>
<td class="text-left"><b>Utilities</b></td>
<td class="text-left"><input class="inputsize" type="text" value="0" name="t80" onBlur="add()"></td>
<td class="text-left"><input class="inputsize" type="text" value="0" name="t81" onBlur="add()"></td>
</tr>
<tr>
<td class="text-left"><b>Web hosting and domains</b></td>
<td class="text-left"><input class="inputsize" type="text" value="0" name="t82" onBlur="add()"></td>
<td class="text-left"><input class="inputsize" type="text" value="0" name="t83" onBlur="add()"></td>
</tr>
<tr>
<td class="text-left"><b>Other</b></td>
<td class="text-left"><input class="inputsize" type="text" value="0" name="t84" onBlur="add()"></td>
<td class="text-left"><input class="inputsize" type="text" value="0" name="t85" onBlur="add()"></td>
</tr>
<tr>
<td class="text-left" style="background:#faffac;"><b>Total Expenses</b></td>
<td class="text-left" style="background:#faffac;"><input disabled class="inputsize"  type="text" id="t105"></td>
<td class="text-left" style="background:#faffac;"><input disabled class="inputsize"  type="text" id="t106"></td>
</tr>
<br>
<tr>
<td class="text-left"><b>Net Income Before Taxes</b></td>
<td class="text-left"><input class="inputsize" type="text" value="0" name="t86" onBlur="add()"></td>
<td class="text-left"><input class="inputsize" type="text" value="0" name="t87" onBlur="add()"></td>
</tr>
<tr>
<td class="text-left"><b>Income tax expense</b></td>
<td class="text-left"><input class="inputsize" type="text" value="0" name="t88" onBlur="add()"></td>
<td class="text-left"><input class="inputsize" type="text" value="0" name="t89" onBlur="add()"></td>
</tr>
<tr>
<td class="text-left" style="background:#faffac;"><b>Income from Continuing Operations</b></td>
<td class="text-left" style="background:#faffac;"><input disabled class="inputsize"  type="text" id="t101"></td>
<td class="text-left" style="background:#faffac;"><input disabled class="inputsize"  type="text" id="t102"></td>
</tr>
</tbody>
</table> 
</form> 

<form name="form3">
<table class="table-fill">
<thead>
<tr>
<th class="text-left">Below-the-line Items</th>
<th class="text-left">2017</th>
<th class="text-left">2016</th>
</tr>
</thead>

<tbody class="table-hover">
<tr>
<td class="text-left"><b>Income from discontinued operations</b></td>
<td class="text-left"><input class="inputsize" type="text" value="0" name="t91" onBlur="add()"></td>
<td class="text-left"><input class="inputsize" type="text" value="0" name="t92" onBlur="add()"></td>
</tr>
<tr>
<td class="text-left"><b>Effect of accounting changes</b></td>
<td class="text-left"><input class="inputsize" type="text" value="0" name="t93" onBlur="add()"></td>
<td class="text-left"><input class="inputsize" type="text" value="0" name="t94" onBlur="add()"></td>
</tr>
<tr>
<td class="text-left"><b>Extraordinary items</b></td>
<td class="text-left"><input class="inputsize" type="text" value="0" name="t95" onBlur="add()"></td>
<td class="text-left"><input class="inputsize" type="text" value="0" name="t96" onBlur="add()"></td>
</tr>

<tr>
<td class="text-left" style="background:#faffac;"><b>Net Income</b></td>
<td class="text-left" style="background:#faffac;"><input disabled class="inputsize"  type="text" id="t103"></td>
<td class="text-left" style="background:#faffac;"><input disabled class="inputsize"  type="text" id="t104"></td>
</tr>
</tbody>
</table> 
</form> 
</div>
<div id="editor"></div>
<button id="cmd">generate PDF</button>
<script>
var doc = new jsPDF();
var specialElementHandlers = {
    '#editor': function (element, renderer) {
        return true;
    }
};

$('#cmd').click(function () {
    doc.fromHTML($('#content').html(), 15, 15, {
        'width': 170,
            'elementHandlers': specialElementHandlers
    });
    doc.save('sample-file.pdf');
});
</script>
<a href="#xyz" name="abc" >Move Up</a>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<script src="assets/javascript/main1.js"></script>

  </body>