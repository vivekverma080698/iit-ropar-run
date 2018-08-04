<?php
include_once  "dbh.inc.php";

$query1 = "SELECT name,emailID, chest_no FROM participants WHERE chest_no IS NOT NULL  AND chest_no_coll = 0";
$r1 = $conn->query($query1);


if ($r1->num_rows > 0)         {  
	echo "<table width=50% style=\"empty-cells: hide;margin:0 auto\">";
	echo    "<tr>";
	echo        "<td>Name</td>";
	echo        "<td>email</td>";
	echo        "<td>Status</td>";
	echo    "</tr>"    ;
	while($row = $r1->fetch_assoc())
	{
		echo '<form method="POST" action="">';
		echo '<tr>';
		$email_id = $row["emailID"];
		echo    '<td>'.$row["name"].'</td>';
		echo    '<td>'.$row["emailID"].'</td>';
		echo    "<td><input onclick=\"foo('".$email_id."')\" type=\"submit\" name = \"submit\" value=\"Checked\" required></td>";
		echo '</form>';
		echo '</tr>';
	}
	echo "</table>";    
}
?>
 <script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
 <script src="https://code.jquery.com/jquery-3.0.0.js"></script>  
 <script src="https://code.jquery.com/jquery-3.0.0.slim.js"></script>
 <script src="https://code.jquery.com/jquery-3.0.0.slim.min.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>
	
	function foo(emailID1){
		$.post('runquery.php',{EMAIL:emailID1,CHECKER:0},function(data)
		{
			alert(data);
		});
	}
</script>