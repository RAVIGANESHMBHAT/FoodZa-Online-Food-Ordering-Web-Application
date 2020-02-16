<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "food_home";


$con = new mysqli($servername, $username, $password, $dbname);

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $a=$_POST['r_no'];

    if($a!="")
        {
            $sql1 = "SELECT * from restaurants where r_no='$a'";
            $result = mysqli_query($con,$sql1);

            if(mysqli_num_rows($result)>0)
            {
            $sql3="DELETE from restaurants where r_no='$a'"; 
            mysqli_query($con,$sql3);
			echo "<script type=\"text/javascript\">window.alert('Deleted Successfully');
			window.location.href = './restaurants.php';</script>";
            #echo "<b>Record with G_ID = $a is deleted successfully.<b>";
            }
           else
			{
				echo "<script type=\"text/javascript\">window.alert('Unable to delete');
				window.location.href = './restaurants.php';</script>";
			}
        }
$con->close();
}
?>