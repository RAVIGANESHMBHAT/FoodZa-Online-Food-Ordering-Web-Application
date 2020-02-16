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
		<p align="right"><a href="test.html"><input type="button" class="submitbtn" value="Logout"/></a></p>
		<p align="left"><a href="foods1.html"><input type="button" class="submitbtn" value="Back"/></a></p>
	<center><p style="color:white;font-size:50px;">Order Placed Successfully</p></center>
	<center><p style="color:white;font-size:30px;">Thank You...Visit again!!!</p></center>
	<p style="text-align:center"><img src="images/sheff.jpg" alt="Sheff" height="200" width="200" align="center"></p>
<?php
	if(isset($_POST['submit']))
	{
		if(!empty($_POST['check_list'])) 
		{
			
			echo"<p></p>";
			
		}
		else{
			echo "<script type=\"text/javascript\">window.alert('Enter at least one item');
				window.location.href = './proceed_to_pay.html';</script>";
		}
	}
?>
	
	</body>
</html>