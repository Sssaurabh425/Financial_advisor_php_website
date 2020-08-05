<html>

<body>

 

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO studies (goal,name,last,gender,dob,mail,mobno,address,city,course,country,college,state,zipcode)
VALUES ('Higher Studies','$_POST[name]','$_POST[last]','$_POST[gender]','$_POST[dob]','$_POST[email]','$_POST[mobno]','$_POST[address]','$_POST[city]','$_POST[course]','$_POST[country]','$_POST[college]','$_POST[state]','$_POST[zipcode]')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<a href="frontpage.php">Go to main page</a>
</body>

</html>