<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "food_home";


$con = new mysqli($servername, $username, $password, $dbname);

if ($_SERVER["REQUEST_METHOD"] == "POST")
{

   
        
            $sql1 = "SELECT * from contact_us";
            $result = mysqli_query($con,$sql1);

            if(mysqli_num_rows($result)>0)
            {
            $sql3="DELETE from contact_us"; 
            mysqli_query($con,$sql3);
			echo "<script type=\"text/javascript\">window.alert('All Feedbacks are Deleted Successfully');
			window.location.href = './contact_us_display.php';</script>";
            #echo "<b>Record with G_ID = $a is deleted successfully.<b>";
            }
           else
			{
				echo "<script type=\"text/javascript\">window.alert('No Feedback is Left');
				window.location.href = './contact_us_display.php';</script>";
			}
$con->close();
}
?>