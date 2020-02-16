<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Foodie</title>
  <style>
	.loginbtn{
    background-color: green;
    color: white;
    padding: 16px 10px;
    margin: 8px 20px 20px 90px;
    border-radius: 24px;
    cursor: pointer;
    width: 45%; opacity: 0.7; align-content: center;
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
	</style>
  
</head>

<body style ="background:red";>

  
  <!-- Navigation -->
  <!DOCTYPE html>
  <html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/index.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


    

  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-red fixed-top">
    <div class="container">
      <a class="navbar-brand"  style="color:white;font-size:40px;padding-left: 1pt">FoodZa</a>
      
      <div class="collapse navbar-collapse" id="navbarResponsive">

        <ul class="nav navbar-nav navbar-right">
		  <li><a href="test.html" style="color:white;font-size:20px">Logout</a></li>
        </ul>
        
    </div>
  </div>
</nav>  

<hr>
<center>
<?php $name=$_SESSION['use'];
 echo "<h1 style=\"color:white;font-size:40px\">👋 Hello ".$name.".</h1>";?>
</center>
<center><h1 style="color:white;font-size:40px">Welcome to User Page</h1> </center>
<div class='container'>
<center>
	<br>
	<br>
	<form action="restaurants_user.php">
	<input style="font-size:25px;" type="submit" name="all_users" class="loginbtn" value="Find Restaurants"/>
	</form>
	<br>
	<br>
	<br>
	<form action="my_orders.php">
	<input style="font-size:25px;" type="submit" name="all_users" class="loginbtn" value="My Orders"/>
	</form>
	<br>
	<br>
	<br>
	<form action="give_feedback.html">
	<input style="font-size:25px;" type="submit" name="all_users" class="loginbtn" value="Give Feedback" />
	</form>
	
</center>
</div>
<hr>
  </body>
  </html>


<!-- Footer -->
<footer class="py-5 bg-dark">
  <div class="container">
    <p class="m-0 text-center text-white" style="color:white;font-size:14px;padding-left:855px">Copyright © 2019 FoodZa- All rights reserved</p>
  </div>
  <!-- /.container -->
</footer>
</body>

</html>