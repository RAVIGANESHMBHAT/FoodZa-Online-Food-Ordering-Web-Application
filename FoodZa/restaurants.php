<!DOCTYPE html>
<html>
<head>
 <title>Restaurants</title>
 <script type="text/javascript">
	document.getElementById("r_no").value = $n+1;
  </script>
 <style>
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
	
.submitbtn{
    background-color: green;
    color: white;
    padding: 16px 10px;
    margin: 8px 20px 20px 90px;
    border-radius: 24px;
    cursor: pointer;
    width: 15%; opacity: 0.7; align-content: center;
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
	.submitbtn1{
    background-color: green;
    color: white;
    padding: 10px 40px;
  
    border-radius: 10px;
    cursor: pointer;
    width: 15%; opacity: 0.7; align-content: center;
    font-family: "verdana";
    font-weight: bold;
    -webkit-box-shadow: 0px 6px 0px green;
    -moz-box-shadow: 0px 6px 0px green;
    box-shadow: 0px 2px 0px green;
    -webkit-transition: all .1s ease-in-out;
    -moz-transition: all .2s ease-in-out;
    transition: all .2s ease-in-out;
    -webkit-transform: translate(0, 2px) rotateX(25deg);
    -moz-transform: translate(0, 4px);
    transform: translate(0, 1px)
    }
 </style>
</head>
<body style="background-color: lavender">
  <h1><center><font style="border:9px solid grey"> RESTAURANTS </font></center></h1>
  <form action="admin_login_next.html">
  <input type="submit" name="back" class="submitbtn1" value="⬅" style="background:#7F00FF;color:white;font-size:30px"/>
  </form>
 <table>
 <tr>
  <th><br>Id<br><br></th> 
  <th><br>Name<br><br></th> 
  <th><br>Location<br><br></th> 
  <th><br>Phone<br><br></th>
  <th><br>Foods Available<br><br></th> 
  <br><br>
 </tr>
  <?php
$con = mysqli_connect("localhost", "root", "", "food_home");

  if ($con->connect_error) {
   die("Connection failed: " . $con->connect_error);
  } 
  
  $sql = "SELECT * from restaurants order by(r_no)";
  $res=mysqli_query($con,$sql);
  if ($result = mysqli_query($con, $sql))
   {
   
		while($row = $result->fetch_assoc())
		{
			echo "<tr><td>" . $row["r_no"]. "</td><td>" . $row["name"]. "</td><td>" . $row["location"]. 
			"</td><td><br>". $row["phone"]. "<br></br></td><td><a href='foods.html'><input type='submit' 
			class='submitbtn1' value='List'></a></td></tr>";
		}
		echo "</table>";
    }
else 
  { 
    echo "0 results"; 
  }
 
$con->close();
?>

<hr>
<table><tr><td>
<h2 style="color:black;font-size:40px">Add Restaurant</h1>
<form action="add_restaurant.php" method="post">
<input style="height:40px;font-size:14pt;width:490px" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
    type = "number" maxlength = "3" size="55" placeholder="Restaurant ID (numbers accepted only)" name="r_no"  required/><br><br>
<input style="height:40px;font-size:14pt;" type="text" name="name" placeholder="Restaurant Name" size="50" required/><br><br>
<input style="height:40px;font-size:14pt;" type="text" name="location" placeholder="Location" size="50" required/><br><br>
<input style="height:40px;font-size:14pt;width:490px" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
    type = "number" maxlength = "10" size="55" placeholder="Phone Number" name="phone"  required/><br><br>
<input type="submit" class="submitbtn" value="Add"/>
</form>
</td><td>
<h2 style="color:black;font-size:40px">Delete Restaurant</h1>
<form action="delete_restaurant.php" method="post">
<input style="height:40px;font-size:14pt;width:490px" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
    type = "number" maxlength = "3" size="55" placeholder="Enter Restaurant ID to be Deleted" name="r_no"  required/><br><br>
<a href="restaurants.php"><input type="submit" class="submitbtn" value="DELETE"/></a>
</form>
</td></tr></table>
</body>
</html>