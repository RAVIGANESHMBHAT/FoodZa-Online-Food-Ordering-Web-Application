 <?php
    if(isset($_POST['r_no']) && isset($_POST['name']) && isset($_POST['location']) && isset($_POST['phone']) ):
    $rid = $_POST['r_no'];
	$unm = $_POST['name'];
    $adr = $_POST['location'];
	$ph = $_POST['phone'];

    $link = new mysqli('localhost','root','','food_home');

    if($link->connect_error)
        die('Connection error: '.$link->connect_error);

    $sql3 = "INSERT INTO RESTAURANTS(r_no,name, location, phone) VALUES('".$rid."','".$unm."', '".$adr."', '".$ph."')";
	//$sql3 = "INSERT INTO login(uname,pass) VALUES('".$unm."','".$pss."')";
    $result = $link->query($sql3); 
	

    if($result > 0):
        echo "<script type=\"text/javascript\">window.alert('Inserted Successfully');
    window.location.href = './restaurants.php';</script>";
    else:
        echo "<script type=\"text/javascript\">window.alert('Unable to insert');
    window.location.href = './restaurants.php';</script>";
    endif;
	 


    $link->close();
    die();
    endif; 
?>
