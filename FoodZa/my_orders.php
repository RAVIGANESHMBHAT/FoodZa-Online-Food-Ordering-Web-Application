<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
 <title>Feedbacks list</title>
 <style>
 .btn{
    background-color: green;
    color: white;
    padding: 16px 10px;
    margin: 8px 40px 20px 10px;
    border-radius: 24px;
    cursor: pointer;
    width: 40%; opacity: 0.7; align-content: center;
    font-family: "verdana";
    font-weight: bold;
    -webkit-box-shadow: 0px 6px 0px green;
    -moz-box-shadow: 0px 6px 0px green;
    box-shadow: 0px 6px 0px green;
    -webkit-transition: all .1s ease-in-out;
    -moz-transition: all .2s ease-in-out;
    transition: all .2s ease-in-out;
    -webkit-transform: translate(0, 5px) rotateX(25deg);
    -moz-transform: translate(0, 4px);
    transform: translate(0, 4px)
    }
  b{
    font-size: 30px;
    font-family: 'Arial';
    padding: 2px;
    text-align: center;
}
  table 
  {
   border-collapse: collapse;
   width: 100%;
   color: #588c7e;
   font-family: monospace;
   font-size: 15px;
   text-align: left;
   font-family:"Verdana";
   font-weight: bold;
   text-align: center;
   border-radius: 14px;
  } 
  th 
  {
   background-color: mediumpurple;
   color: white;
   border-radius: 14px;
  }
  h1{
    font-family: "Arial";
    font-size: 50px;
    border: 9px solid grey;
    border-radius: 17px;
     color: black;
  }
  td{
    padding: 12px;
    border-radius: 14px;
  }
  tr:nth-child(even) {background-color: #f2f2f2; 
    border-radius: 14px;}
 </style>
</head>
<body style="background-color: lavender">
  <h1><center><font style="border:9px solid grey">MY ORDERS </font></center></h1>
  <table><tr><td>
  <form action="user_login_next.php" method="post" >
  <input type="submit" name="back" value="⬅" class="btn" style="background:#7F00FF;color:white;font-size:30px"/>
  </form></td><td>
  <form action="my_order_delete.php" method="post">
  <input type="submit" name="delete" value="Clear All" class="btn" style="background:#7F00FF;color:white;font-size:30px"/>
  </form></td></tr></table>
 <table>
 <tr>
  <th><br>Name<br><br></th>
  <th><br>Orders<br><br></th> 
  <th><br>Date<br><br></th> 
  <th><br>Status<br><br></th> 
  <br><br>
 </tr>
  <?php
  $user=$_SESSION['use'];
$con = mysqli_connect("localhost", "root", "", "food_home");

  if ($con->connect_error) {
   die("Connection failed: " . $con->connect_error);
  } 

  $sql = "SELECT * from user_history1 where name='$user'";
  mysqli_query($con,$sql);
  if ($result = mysqli_query($con, $sql))
   {
   
   while($row = $result->fetch_assoc())
    {
    echo "<tr><td>" . $row["name"]. "</td><td>" . $row["history"]. "</td><td>" . $row["date"]. "</td><td>" . $row["status"]. "</td></tr>";
    }
    echo "</table>";
    }
else 
  { 
    echo "<h3>No results found!!!</h3>"; 
  }
$con->close();
?>
</table>
</body>
</html>