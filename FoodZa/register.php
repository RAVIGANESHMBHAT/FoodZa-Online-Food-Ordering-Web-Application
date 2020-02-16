 <?php session_start();
    if(isset($_POST['uname']) && isset($_POST['addr']) && isset($_POST['phone']) && isset($_POST['email']) && isset($_POST['pass'])):
    $unm = $_POST['uname'];
    $adr = $_POST['addr'];
	$ph = $_POST['phone'];
	$em = $_POST['email'];
	$pss = $_POST['pass'];

	$_SESSION['emai']=$em;
	$_SESSION['phon']=$ph;
    $link = new mysqli('localhost','root','','food_home');

    if($link->connect_error)
        die('connection error: '.$link->connect_error);
	if($unm!="" and $adr!="" and $ph!="" and $pss!="" and is_numeric($ph) and !is_numeric($unm)){
    $sql3 = "INSERT INTO REGISTER(name, address, phone,email,password) VALUES('".$unm."', '".$adr."', '".$ph."', '".$em."', '".$pss."')";
	//$sql3 = "INSERT INTO login(uname,pass) VALUES('".$unm."','".$pss."')";
    $result = $link->query($sql3); 
	
	$sql3 = "INSERT INTO login(uname,pass) VALUES('".$unm."','".$pss."')";   
    $result = $link->query($sql3);
	}
	else{
		echo "<script type=\"text/javascript\">window.alert('Enter valid data');
    window.location.href = './sign_up.html';</script>";
	}
    if($result > 0):
        echo "<script type=\"text/javascript\">window.alert('Registered Successfully');
    window.location.href = './sign_in.html';</script>";
    else:
        echo "<script type=\"text/javascript\">window.alert('Unable to insert');
    window.location.href = './sign_up.html';</script>";
    endif;
	 

	 

    $link->close();
    die();
    endif; 
?>
