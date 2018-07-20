<?
include_once  "dbh.inc.php";

$NAME = $_POST['NAME'];
$AGE = $_POST['AGE'];
$TSIZE = $_POST['TSIZE'];
$EMAIL = $_POST['EMAIL'];
$MOB1 = $_POST['MOB1'];
$MOB2 = $_POST['MOB2'];
$ADD = $_POST['ADD'];

$query2 = "SELECT * FROM participants WHERE emailID = '$EMAIL'";
$i =0;
$r2 = $conn->query($query2); 

if ($r2->num_rows > 0) {
	echo "Already Register or use different email id";
}
else {
	$i = 1;
	$sql_query = "INSERT into participants(name,age,t_size,emailID,mobile,emergency,address) values('$NAME','$AGE','$TSIZE','$EMAIL','$MOB1' , '$MOB2','$ADD')";	

$conn->query($sql_query);
}

if($i == 1)
	echo "Successully registered";