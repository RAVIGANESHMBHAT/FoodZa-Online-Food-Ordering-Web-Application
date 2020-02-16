<?php
    //Always include this database query to connect ibto databnse
    $servername="localhost";
    $dbname="root";
    $dbpass="";
    $database="food_home"; 

    $connection=mysqli_connect($servername,$dbname,$dbpass,$database);
    if(!$connection){
        die("ERROR:Could not connect." .mysqli_connect_error());
    }
    echo "Connect Successfully. Host info ".mysqli_get_host_info($connection);
?>