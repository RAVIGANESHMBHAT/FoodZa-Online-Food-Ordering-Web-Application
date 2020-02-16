<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "food_home";


$con = new mysqli($servername, $username, $password, $dbname);

if ($_SERVER["REQUEST_METHOD"] == "POST")
{

   
        
            $sql1 = "SELECT * from user_history";
            $result = mysqli_query($con,$sql1);

            if(mysqli_num_rows($result)>0)
            {
            $sql3="DELETE from user_history"; 
            mysqli_query($con,$sql3);
			echo "<script type=\"text/javascript\">window.alert('All Transaction Histories are Deleted.');
			window.location.href = './history_display.php';</script>";
            #echo "<b>Record with G_ID = $a is deleted successfully.<b>";
            }
           else
			{
				echo "<script type=\"text/javascript\">window.alert('No Transaction History is Left');
				window.location.href = './history_display.php';</script>";
			}
$con->close();
}
?>