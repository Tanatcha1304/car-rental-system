<?php 

    $servername = "localhost";
    $username = "babypanda";
    $password = "";
    $dbname = "bon";

    //create connection
    $conn = mysqli_connect($servername, 'root', '', $dbname);

    //check cennection
    if(!$conn){
        die("connection failed".mysqli_connect_error());
    }

?>