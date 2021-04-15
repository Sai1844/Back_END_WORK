<?php 
    $servername="localhost";
    $dbusername="root";
    $dbpass= "";
    $dbname= "ratingsystem";
 
    $conn = mysqli_connect($servername, $dbusername , $dbpass , $dbname);
    
    if (!$conn) {
        die("Connection to database Failed : ".mysqli_connect_error());
    }
?>