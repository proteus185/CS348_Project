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
$n = $_POST['username'];
$pwd = $_POST['password'];

if($n && $pwd) {
$query = "SELECT pname FROM p_user WHERE pname ='$n' AND pwd ='$pwd'";
$result = mysqli_query ($conn, $query);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

if($row){
print "Welcome! ". $n .", Thanks for checking in with us!";
//$sw_query = "SELECT * FROM project_ship_info WHERE name = '$n' LIMIT 0,1";
//$sw_result = mysqli_query ($conn, $query);

exit();
}
if(!$row){
print "Welcome! ". $n . ", You have now created an account with ".$pwd." as your password";
$set_nu_query = "INSERT INTO p_user (pname,pwd) VALUES ('$n','$pwd')";
$nu_result = mysqli_query ($conn, $set_nu_query);
exit();
}

}
mysqli_close();
?>
</body>
</html>
