<?php
    $dbServer = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "iitrun";

    $conn = mysqli_connect($dbServer ,$dbUsername,$dbPassword,$dbName);
    
    
  //  $conn = new mysqli($dbServer ,$dbUsername,$dbPassword,$dbName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

