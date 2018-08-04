<?php
include_once  "dbh.inc.php";

$query1 = "SELECT emailID,chest_no FROM participants WHERE ending_time IS NULL";
$r1 = $conn->query($query1);

$chestlabel = 1;

if ($r1->num_rows > 0)         {  
	echo "<table width=50% style=\"empty-cells: hide;margin:0 auto\">";
	echo    "<tr>";
	echo        "<td>Chest Number</td>";
	echo        "<td>Ending Time</td>";
	echo    "</tr>"    ;
	while($row = $r1->fetch_assoc())
	{
		echo '<form method="POST" action="">';
		echo '<tr>';
		$email_id = $row["emailID"];
		echo    '<td>'.$row["chest_no"].'</td>';
		echo    '<td><input type="TIME" placeholder="Time" name="FT" required></td>';
		echo    "<td><input onclick=\"foo(FT,'".$email_id."')\" type=\"submit\" name = \"submit\" value=\"Checked\" required></td>";
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
	
	function foo(FT,emailID1){
		$.post('runquery.php',{FINAL:FT.value,EMAIL:emailID1,CHECKER:2},function(data)
		{
			alert(data);
		});
	}
</script>