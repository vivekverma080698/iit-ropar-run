<?php
include_once  "dbh.inc.php";
$checker = $_POST['CHECKER'];

if($checker == 0){
$EMAIL = $_POST['EMAIL'];
$sql_query2 = "UPDATE participants set chest_no_coll = 1 where emailID = '$EMAIL'";	
$conn->query($sql_query2);   
}
elseif ($checker == 1) {
$EMAIL = $_POST['EMAIL'];
$sql_query2 = "UPDATE participants set t_dilv = 1 where emailID = '$EMAIL'";	
$conn->query($sql_query2);   
}
elseif ($checker == 2) {
$EMAIL = $_POST['EMAIL'];
$FT = $_POST['FINAL'];
$sql_query2 = "UPDATE participants set ending_time = '$FT' where emailID = '$EMAIL'";	
$conn->query($sql_query2);
$sql_query3 = "UPDATE participants set timetaken = '06:00:00'- $FT' where emailID = '$EMAIL'";	
$conn->query($sql_query3);
}