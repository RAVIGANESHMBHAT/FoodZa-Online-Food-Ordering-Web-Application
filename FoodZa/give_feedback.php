 <?php session_start();
	$unm=$_SESSION['use'];
    if(isset($_POST['subject']) && isset($_POST['message'])):
	$sub = $_POST['subject'];
	$msg = $_POST['message'];
	echo"<p>".$email."</p>"."<br/>";
    $link = new mysqli('localhost','root','','food_home');

    if($link->connect_error)
        die('connection error: '.$link->connect_error);
	
	$result = $link->query("SELECT email,phone from register where name='".$unm."'");
	$row=$result->fetch_assoc();
	$email=$row['email'];
	$ph=$row['phone'];	
	//$email=$link->query("select email from register where name='$unm'");
	//$ph=$link->query("select phone from register where name='$unm'");
	if($sub!="" and $msg!=""){
		$sql3 = "INSERT INTO contact_us(name, email, phone,subject,message) VALUES('".$unm."', '".$email."', '".$ph."', '".$sub."', '".$msg."')";
		$result = $link->query($sql3); 
	}
    if($result > 0):
        echo "<script type=\"text/javascript\">window.alert('Feedback Sent Successfully');
    window.location.href = './user_login_next.php';</script>";
    else:
        echo "<script type=\"text/javascript\">window.alert('Unable to insert');
    window.location.href = './give_feedback.html';</script>";
    endif;
	 


    $link->close();
    die();
    endif; 
?>
