<html>
<?php
require("dbconnect.php");
$usrname=$_POST['name'];
$passs=$_POST['pass'];
//echo $usrname,$pass;
$sql="select name,pass from `admin_login` where name='$usrname' and pass='$passs'";
$result=mysqli_query($connection,$sql);
$row=$result->fetch_assoc();//converts the object into array
if($row['name']==$usrname and $row['pass']==$passs and $row['name']!="" and $row['pass']!="" ){
    //echo "<script>alert('Login Sucessful')</script>";
    echo "<script type=\"text/javascript\">window.alert('Login Successful');
    window.location.href = './admin_login_next.html';</script>";
    //header("Location: http://localhost/Web%20mini%20project/art-gallery-database-management-master/FrontEnd.html");
}
else{
    echo "<script type=\"text/javascript\">window.alert('Login Failed');
    window.location.href = './admin_sign_in.html';</script>";
    //header("Location: http://localhost/Web%20mini%20project/art-gallery-database-management-master/loginpage.html");
}

?>
</html>