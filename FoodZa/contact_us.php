 <?php
    if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['subject']) && isset($_POST['message'])):
    $unm = $_POST['name'];
    $adr = $_POST['email'];
	$ph = $_POST['phone'];
	$em = $_POST['subject'];
	$pss = $_POST['message'];

    $link = new mysqli('localhost','root','','food_home');

    if($link->connect_error)
        die('connection error: '.$link->connect_error);
	if($unm!="" and $pss!="" and $ph!="" and $pss!="" and is_numeric($ph) and !is_numeric($unm)){
		$sql3 = "INSERT INTO contact_us(name, email, phone,subject,message) VALUES('".$unm."', '".$adr."', '".$ph."', '".$em."', '".$pss."')";
		//$sql3 = "INSERT INTO login(uname,pass) VALUES('".$unm."','".$pss."')";
		$result = $link->query($sql3); 
	}
	else{
		echo "<script type=\"text/javascript\">window.alert('Enter a valid data');
		window.location.href = './contact_us.html';</script>";
	}
    if($result > 0):
        echo "<script type=\"text/javascript\">window.alert('Feedback Sent Successfully');
    window.location.href = './test.html';</script>";
    else:
        echo "<script type=\"text/javascript\">window.alert('Unable to insert');
    window.location.href = './contact_us.html';</script>";
    endif;
	 


    $link->close();
    die();
    endif; 
?>
