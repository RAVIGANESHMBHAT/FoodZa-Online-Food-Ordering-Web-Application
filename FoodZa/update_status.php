<?p session_start(); ?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "food_home";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE user_history SET status='Doe' WHERE id=2";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>

<?php
    if(isset($_POST['sl_no']) && isset($_POST['status']) ):
	$sl=$_POST['sl_no'];
    $rid = $_POST['status'];

    $link = new mysqli('localhost','root','','food_home');

    if($link->connect_error)
        die('Connection error: '.$link->connect_error);

    //$sql3 = "INSERT INTO RESTAURANTS(r_no,name, location, phone) VALUES('".$rid."','".$unm."', '".$adr."', '".$ph."')";
	//$sql3="UPDATE user_history SET status='Delivered'";//." WHERE sl_no=".$sl;
	//$sql3 = "INSERT INTO login(uname,pass) VALUES('".$unm."','".$pss."')";
    $result = $link->query("UPDATE user_history SET status='$rid'  where sl_no=$sl");
	$result = $link->query("UPDATE user_history1 SET status='$rid'  where date=( select date from user_history where sl_no='$sl')");	
	

    if($result > 0):
        echo "<script type=\"text/javascript\">window.alert('Updated Successfully');
    window.location.href = './history_display.php';</script>";
    else:
        echo "<script type=\"text/javascript\">window.alert('Unable to update');
    window.location.href = './history_display.php';</script>";
    endif;
	 


    $link->close();
    die();
    endif; 
?>
