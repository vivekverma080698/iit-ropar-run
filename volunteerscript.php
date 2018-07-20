<?
include_once  "dbh.inc.php";


$NAME = $_POST['NAME'];
$AGE = $_POST['AGE'];
$TSIZE = $_POST['TSIZE'];
$EMAIL = $_POST['EMAIL'];
$MOB1 = $_POST['MOB1'];
$ANS = $_POST['ANS'];
$ADD = $_POST['ADD'];


$query2 = "SELECT * FROM volunteer WHERE emailID = '$EMAIL'";  
$r2 = $conn->query($query2); 
if ($r2->num_rows > 0) {
	echo "Already Register or use different email ID";
}
else {
	echo "Successfully registered";
	$sql_query = "INSERT into volunteer(name,age,t_size,emailID,mobile,cycle,address) values('$NAME','$AGE','$TSIZE','$EMAIL','$MOB1' , '$ANS','$ADD')";	
	$conn->query($sql_query);
}