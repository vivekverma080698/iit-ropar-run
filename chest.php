<?php
include_once  "dbh.inc.php";

$query1 = "SELECT emailID, chest_no FROM participants WHERE chest_no =0";
$r1 = $conn->query($query1);
$query2 = "SELECT max(chest_no) FROM participants";
$r2 = $conn->query($query2);
$row2 = $r2->fetch_assoc();
$chestlabel = $row2["max(chest_no)"];

if ($r1->num_rows > 0) {   
	while($row = $r1->fetch_assoc()) {        
		$chestlabel = $chestlabel + 1;
		$myemail = $row["emailID"];
		$sql_query2 = "UPDATE participants set chest_no = '$chestlabel' where emailID = '$myemail'";	
		$conn->query($sql_query2);   
		
	}
$chestlabel =0;
}
