<html>
<?php  session_start(); ?>

<?php
require("dbconnect.php");
$usrname=$_POST['uname'];
$passs=$_POST['pass'];
//echo $usrname,$pass;
$sql="select uname,pass from `login` where uname='$usrname' and pass='$passs'";
$result=mysqli_query($connection,$sql);
$row=$result->fetch_assoc();//converts the object into array
if($row['uname']==$usrname and $row['pass']==$passs and $row['uname']!="" and $row['pass']!="" ){
	$_SESSION['use']=$usrname;
    //echo "<script>alert('Login Sucessful')</script>";
    echo "<script type=\"text/javascript\">window.alert('Login Successful');
    window.location.href = './user_login_next.php';</script>";
    //header("Location: http://localhost/Web%20mini%20project/art-gallery-database-management-master/FrontEnd.html");
}
else{
    echo "<script type=\"text/javascript\">window.alert('Login Failed');
    window.location.href = './sign_in.html';</script>";
    //header("Location: http://localhost/Web%20mini%20project/art-gallery-database-management-master/loginpage.html");
}

?>
</html>