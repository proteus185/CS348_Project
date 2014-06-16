<html>
<head> <title><? print "Purchase Confimation";?> </title>
</head>
<body>
<?php

include('mydbinfo.php');
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if(!$conn) {
print "Unable to connect to the DB, connection Failed";
exit();
}

//variable bank
$cc = $_POST['ccnumber'];
$n = $_POST['name'];
$add = $_POST['address'];
$city = $_POST['city'];
$st = $_POST['state'];
$zip = $_POST['Zip'];
$phone = $_POST['phone'];
$email = $_POST['email'];

print "Values: " . $n; 

if($cc && $n && $add && $city && $st && $zip && $phone && $email) {
$query = "INSERT INTO project_ship_info (ccnumber, name, address, city, state, zip, phone, email) VALUES($cc, $n, $add, $city, $st, $zip, $phone, $email)";
$result = mysqli_query ($conn, $query);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

if($row){
print "Welcome! ". $n ." , you have changed your password!";
exit();
}

}
?>
</body>
</html>
