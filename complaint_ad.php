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
?>
<html>
<head>
<title>Complaints </title>
<style>.content-table {
  border-collapse: collapse;
  margin: 25px 0;
  font-size: 0.9em;
  min-width: 400px;
  border-radius: 5px 5px 0 0;
  overflow: hidden;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}

.content-table thead tr {
  background-color: #66066e;
  color: #ffffff;
  text-align: left;
  font-weight: bold;
}

.content-table th,
.content-table td {
  padding: 12px 15px;
}

.content-table tbody tr {
  border-bottom: 1px solid #dddddd;
}

.content-table tbody tr:nth-of-type(even) {
  background-color: #f3f3f3;
}
.content-table tbody tr:nth-of-type(odd) {
  background-color: #f5e3f4;
}


.content-table tbody tr:last-of-type {
  border-bottom: 2px solid #610569;
}

.content-table tbody tr.active-row {
  font-weight: bold;
  color: #2f0341;
}</style>

</head>
<body style="background-color: rgb(63, 202, 202);">



<div style="background-color:black;color:white;padding:20px;">
<img src="logo.jpg" width=125 height=75 align="left"/>

  <h1><center><b><emp>SCWA HOUSING SOCIETY</emp></b></h1></center>

</div> <br>
<h1><center><b><emp>COMPLAINTS</emp></b></h1></center>
<table class="content-table"  style="border:1px solid black;margin-left:auto;margin-right:auto;">
            <thead>
             <tr>
             <th>C_id</th>
              <th>Site No.</th>
              <th>Date</th>
              <th>Name</th>
              <th>Statment</th>
             </tr>
            </thead>  
           <tbody>
             
<?php

$sql = "SELECT * FROM complain order by c_id DESC LIMIT 3;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
      $st=$row["site_no"];
      $qry="SELECT name FROM resident WHERE site_no=$st";
      $res = $conn->query($qry);
    ?>
    <tr>
        <td><?php echo $row["c_id"];?></td>
        <td><?php echo $row["site_no"];?></td>
        <td><?php echo $row["c_date"];?></td>
        <td><?php echo $row["name"];?></td>
        <td><?php echo $row["c_statement"];?></td>
    </tr>
  



<?php    
  
  
  
  
  }
} else {
  echo "0 results";
}
$conn->close();
?>

</body>
</html>

</body>
</html>