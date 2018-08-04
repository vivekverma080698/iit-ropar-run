<?php
include_once  "dbh.inc.php";

$query1 = "SELECT COUNT(*) FROM participants";
$r1 = $conn->query($query1);
$rowcount = $r1->num_rows;


if ($rowcount > 0) {  
	$rowcount = $rowcount -1;
	$query2 = "SELECT max(ending_time-starting_time) as myrank , emailID FROM participants WHERE rankcheck = 0";
	$r2 = $conn->query($query2);
	$EMAIL = $r2->fetch_assoc();
	$sql_query2 = "UPDATE participants set rank = '$rowcount' AND rankcheck = 1 where emailID = '$EMAIL'";	
	$conn->query($sql_query2);
}

$query3 = "SELECT emailID FROM participants";
$r1 = $conn->query($query3);

if ($r1->num_rows > 0)         {  
	while($row = $r1->fetch_assoc())
	{
	$sql_query2 = "UPDATE participants set rankcheck = 0 where emailID = '$row['emailID']'";	
	$conn->query($sql_query2);		
	}
}


?>
<script src="js/jquery-3.1.1.min.js"></script>

<script>
	
	function foo(FT,emailID1){
		$.post('runquery.php',{FINAL:FT.value,EMAIL:emailID1,CHECKER:2},function(data)
		{
			alert(data);
		});
	}
</script>