

<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    * {
  font-family: sans-serif; /* Change your font family */
}
input[type=text] {
  width: 1400px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  font-size: 16px;
  background-color: white;
  background-image: url('searchicon.png');
  background-position: 10px 10px; 
  background-repeat: no-repeat;
  padding: 12px 20px 12px 40px;
}

input[type=submit] {
    padding:15px 15px; 
    background:rgb(112, 147, 189); 
    color:#ccc;
    border:0 none;
    cursor:pointer;
    -webkit-border-radius: 15px;
    border-radius: 15px; 
}

.content-table {
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
}

  </style>
  <body style="background-color: rgb(63, 202, 202);">
  <div style="background-color:black;color:white;padding:20px;">
    <img src="logo.jpg" width=125 height=75 align="left"/>
    
      <h1><center><b><emp>SCWA HOUSING SOCIETY</emp></b></h1></center>
    
    </div> 
    
    <br>
    <br>
    <form method="post">
      <input type="text" name="valueToSearch" placeholder="Enter Service Time">
       <input type="submit" name="search" value="Search"><br><br>
   

          <table class="content-table"  style="border:1px solid black;margin-left:auto;margin-right:auto;">
            <thead>
             <tr>
             <th>S_id</th>
              <th>Service Type</th>
              <th>Name</th>
              <th>Phone no.</th>
             </tr>
            </thead>  
           <tbody>
             

             <?php
             if(isset($_POST['search']))
             {
              $servername = "localhost";
              $username = "root";
              $password = "";
              $dbname = "isro";
              
              // Create connection
              $conn = new mysqli($servername, $username, $password, $dbname);
              $type = $_POST['valueToSearch'];
              $type1= strtoupper($type);
              $query = "SELECT * FROM service WHERE s_type = '$type1'";
              $result = $conn->query($query) or die ('error getting data');

             


              if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) 
                {
                  ?>
                <tr>
                    <td><?php echo $row['s_id'];?></td>
                    <td><?php echo $row['s_type'];?></td>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['phone'];?></td>
                </tr>
              
            
          

          <?php        
                }
              }
              else 
              {
                echo "0 results";
              }
            }
              ?>
               </tbody>
         </table>
      
</body>
        
</html>