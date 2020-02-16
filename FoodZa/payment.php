<?php session_start(); ?>
<html>
	<head>
		<title>Payment</title>
	
		<style>
		body {
			background-color: red;
		}
		h2{
		color:white;
		font-size:40px;
		}
		h3{
		color:white;
		font-size:20px;
		}
		.boxed {
			border: 5px solid white ;
			width:50%;
			position:absolute;
		}
		.submitbtn{
		background-color: green;
		color: white;
		padding: 16px 10px;
		margin: 8px 20px 20px 10px;
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
		</style
		
	</head>
	<body>

	<a href="foods1.html"><input type="button" class="submitbtn" value="Back"/></a>
	<center><p style="color:white;font-size:30px;">Payment page</p></center><hr>
	<a href='makepdf.php'><input style='color:white;font-size:20px;position: absolute; right: 0;' name="btnn" type='button' class='submitbtn' value='Save as PDF'/></a>
<?php
require_once __DIR__ . '/vendor/autoload.php';
	if(isset($_POST['submit']))
	{
		if(!empty($_POST['check_list'])) 
		{
			// Counting number of checked checkboxes.
			$checked_count = count($_POST['check_list']);
			//echo "<script type=\"text/javascript\">window.alert('Are you sure to proceed?');
				//window.location.href = './payment.php';</script>";
			echo "<center><p style='color:white;font-size:30px'>Selected Item(s) are:</p></center>";
			// Loop to store and display values of individual checked checkbox.
			$s="";
			$sum=0;
			$count=1;
			$m=1;
			foreach($_POST['check_list'] as $selected) 
			{
				
				
					
				$k=explode(' ',$selected);
				$l=(int)$k[count($k)-1];
				if($count%2!=0 and count($selected)>=1 and $l>0)
					$s=$s.'🔪 '.$selected.' ';
				else
					$s=$s.' '.$selected.' ';
				if($l>0) $count++;
				if($count%2==0)
					$m=$l;
				else{
					$sum+=($l*$m);
				}
				echo "<center><p style='color:white;font-size:20px'>".$selected ." </p></center>";
			}
			//$time_now=mktime(date('h')+5,date('i')+30,date('s'));
			//$date = date('d-m-Y H:i:s', $time_now);
			date_default_timezone_set("Asia/kolkata");
			$mm=date("Y-m-d H:i:s");
			//$dateTime = new DateTime('now', new DateTimeZone('Asia/Kolkata')); 
			//$mm=$dateTime->format("y/m/d  H:i A");
			
			
			echo "<center><p style='color:white;font-size:30px'>--------------------------------------------</p></center>";
			echo "<center><p style='color:white;font-size:30px'> Total Cost : ".$sum ." /-</p></center>";
			
			//Store the current page data to use in next page
			$_SESSION['dat']=$mm;
			$_SESSION['total']=$sum;
			$_SESSION['history']=$s;
			
			
			$s=$s.' 🔪 Total Cost: '.$sum;
			
			//Update the data to the database
			$name = $_SESSION['use'];
			$history = $s;
			$date = $mm;
			$status="Yet to be Delivered";
			$link = new mysqli('localhost','root','','food_home');

			if($link->connect_error)
				die('Connection error: '.$link->connect_error);

			
			$sql3 = "INSERT INTO user_history1(name, history, date,status) VALUES('".$name."','".$history."', '".$date."', '".$status."')";	 
			$result = $link->query($sql3);
			$sql3 = "INSERT INTO user_history(name, history, date,status) VALUES('".$name."','".$history."', '".$date."', '".$status."')";	 
			$result = $link->query($sql3);
			
			
			 
			$link->close();
			//die();
			
			
			
	

			
			
		}
		else{
			echo "<script type=\"text/javascript\">window.alert('Enter at least one item');
				window.location.href = './foods1.html';</script>";
		}
	}
	
?>
<center><a href='proceed_to_pay.html'><input style='color:white;font-size:20px;' name="btnn" type='button' class='submitbtn' value='Proceed to Pay'/></a></center>
	</body>

</html>


