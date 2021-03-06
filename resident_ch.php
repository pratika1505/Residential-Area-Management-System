<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <title>New Resident</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <style>
      html, body {
      min-height: 100%;
      }
      body, div, form, input, select, p { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 14px;
      color: rgb(97, 231, 225);
      line-height: 22px;
      }
      h1 {
      margin: 15px 0;
      font-weight: 400;
      }
      .testbox {
      display: flex;
      justify-content: center;
      align-items: center;
      height: inherit;
      padding: 3px;
      }
      form {
      width: 50%;
      padding: 20px;
      background: rgb(7, 36, 54);
      box-shadow: 0 2px 5px #ccc; 
      }
      input, select, textarea {
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      }
      input:hover, select:hover, textarea:hover {
      outline: none;
      border: 1px solid #095484;
      }
      input {
      width: calc(100% - 10px);
      padding: 5px;
      }
      select {
      width: 100%;
      padding: 7px 0;
      background: transparent;
      }
      textarea {
      width: calc(100% - 6px);
      }
      .item {
      position: relative;
      margin: 20px 0;
      }
      input[type="date"]::-webkit-inner-spin-button {
      display: none;
      }
      .item i, input[type="date"]::-webkit-calendar-picker-indicator {
      position: absolute;
      font-size: 20px;
      color: #a9a9a9;
      }
      .item i {
      right: 2%;
      top: 30px;
      z-index: 1;
      }
      [type="date"]::-webkit-calendar-picker-indicator {
      right: 1%;
      z-index: 2;
      opacity: 0;
      cursor: pointer;
      }
      .btn-block {
      margin-top: 20px;
      text-align: center;
      }
      button {
      width: 150px;
      padding: 10px;
      border: none;
      -webkit-border-radius: 5px; 
      -moz-border-radius: 5px; 
      border-radius: 5px; 
      background-color: #095484;
      font-size: 16px;
      color: #fff;
      cursor: pointer;
      }
      button:hover {
      background-color: #0666a3;
      }
    </style>
  </head>
  <body style="background-color: rgb(63, 202, 202);">



    <div style="background-color:black;color:white;padding:20px;">
    <img src="logo.jpg" width=100 height=60 align="left"/>
    
      <h1><center><b><emp>SCWA HOUSING SOCIETY</emp></b></h1></center>
      <?php
//On page 2
$x= $_SESSION["varname"];
echo "Welcome $x";
?>
    </div> 
<br>
<br>
    <div class="testbox">
      <form action="http://localhost/resident.php">
        <h1>Modify Resident</h1>
         <div class="item">
            <p>Name</p>
            <input type="text" name="name1" value="<?php echo $x;?>" readonly/>
          </div>
          <div class="item">
            <p>Ph no.</p>
            <input type="text" name="phone1"/>
          </div>
          <div class="item">
            <p>Email</p>
            <input type="text" name="email1"/>
          </div>
          <div class="item">
            <p>Site no.</p>
            <input type="text" name="site1"/>
          </div>
          <div class="item">
       
            <label for="">User_type</label>
            <select name="utype1" id="utype">
              <option value="resident">Resident</option>
              <option value="admin">Admin</option>
              
            </select>
          </div> 
        <div class="btn-block">
          <button type="submit" href="/">Modify</button>
        </div>
      </form>
    </div>
    
  </body>
</html>