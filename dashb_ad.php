<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head><title>Admin Home Page</title>
<script type = "text/javascript">
     function profile1()
     {
      window.open ("registration.html");
     }
     
     function complaint1()
     {
      window.open ("http://localhost/prj/complaint_ad.php");
     }
     function notice1()
     {
      window.open ("notice_ad.html");
     }
     function search1()
     {
      window.open ("http://localhost/prj/search_adame.html");
     }
</script>
<meta name="viewport" content="width=device-width, initial-scale=1">

<style> 

input[type=text]:focus {
  width: 100%;
}
    #largebox {
      float: left;
      width: 1500px;
      height: 400px;
      background-color:rgba(7, 4, 46, 0.993)
    
      
    
    }
    #leftbox { 
        float:left;  
        background:rgb(165, 124, 204); 
        width:300px; 
        height:300px; 
      margin-left: 50px;
      margin-right: 25px;
      margin-top: 50px;
    } 
    #middlebox{ 
      float:left;  
        background:rgb(20, 131, 88); 
        width:300px; 
        height:300px; 
      margin-left: 25px;
      margin-right: 35px;
      margin-top: 50px; 
    } 
    #rightbox{ 
      float:left;  
        background:rgb(235, 205, 170); 
        width:300px; 
        height:300px; 
      margin-left: 35px;
      margin-right: 25px;
      margin-top: 50px;
    } 
    #rightbox1{ 
      float:left;  
        background:rgb(114, 105, 243); 
        width:300px; 
        height:300px; 
      margin-left: 25px;
      margin-right: 25px;
      margin-top: 50px;
    } 
  


    h1{ 
        color:rgb(252, 252, 252); 
        text-align:center; 
    } 
    .button {
  background-color: #cff860;
  border: none;
  color: rgb(5, 5, 5);
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
img {
      border: 5px solid #555;
    }
</style>  
</head>  






<body style="background-color: rgb(63, 202, 202);">



    <div style="background-color:black;color:rgb(231, 221, 199);padding:20px;">
    <img src="logo.jpg" width=125 height=60 align="left"/>
    
    
      <h2><center><b><emp>SCWA HOUSING SOCIETY</emp></b></h2></center>
     <right>Username: <?php echo  $_SESSION["user6"];?>  
       
       
       

       
    
    </div> 
    <div style="background-color:rgb(46, 16, 51);color:rgb(231, 221, 199);padding:10px;">
    
      
        <h3><center><b><emp>ADMIN HOME</emp></b></h3></center>
       
        
      </div> 
      
    
    <br>
    <br>
    


    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    * {
      box-sizing: border-box;
    }
    </style>
    </head>



<br>
<div id = "largebox"> 
    
      
    <div id = "leftbox"> 
   <center><br><br>
        <img src="https://localhost/prj/images/profile.jpg" width=100 height=100 align="center"/>
        <br><br> <button class="button" onClick="profile1()">Modify Resident</button>
        <br>
        
    </div>  
      
    <div id = "middlebox" style=color:rgb(15,15,15);> 
 <center><br><br>
        <img src="https://localhost/prj/images/complaint.jpg" width=100 height=100 align="center"/>
        <br><br> <button class="button" onClick="complaint1()">Complaints</button>
    </center>
    </div> 
      
    <div id = "rightbox" style=color:rgb(10,10,10);> 
     <center><br><br>
        <img src="https://localhost/prj/images/notice.jpg" width=100 height=100 align="center"/>
        <br><br><button class="button" onClick="notice1()">Notice</button>
    </center>
    </div> 
    <div id = "rightbox1" style=color:rgb(10,10,10);> 
      <center><br><br>
         <img src="https://localhost/prj/images/search.jpg" width=100 height=100 align="center"/>
         <br><br><button class="button" onClick="search1()">Services</button>
     </center>
     </div> 
</div> 
 
</body>  
</html>                 