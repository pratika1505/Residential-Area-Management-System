<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "isro";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = 'CALL GetAllProducts()';
$result = $conn->query($sql);

if ($result->num_rows > 0) 
{
  
  while($row = $result->fetch_assoc()) 
  {
    echo  "id:" . $row["aa"]. " date:" . $row["cc"].  "<br>";
  }
} 
$conn->close();
  ?> 