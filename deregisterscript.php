<?
include_once  "dbh.inc.php";

$EMAIL = $_POST['EMAIL'];


$query2 = "SELECT * FROM participants WHERE emailID = '$EMAIL'";  
$query3 = "SELECT * FROM volunteer WHERE emailID = '$EMAIL'";  
$r3 = $conn->query($query3); 
$r2 = $conn->query($query2); 

if ($r2->num_rows == 0 && $r3->num_rows == 0) {
	echo "Not Registered";
}
else {
$sql_query2 = "DELETE FROM participants WHERE  emailID = '$EMAIL'";	
$conn->query($sql_query2); 
$sql_query2 = "DELETE FROM volunteer WHERE  emailID = '$EMAIL'";	
$conn->query($sql_query2); 
echo "Deregistered";
}