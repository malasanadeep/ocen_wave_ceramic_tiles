<?php

    $servername="localhost";
    $username="root";
    $password="";
    $databasename="project";


    $conn = mysqli_connect($servername,$username,$password,$databasename);

    if(!$conn){
        die("sorry we failed to connect".mysqli_connect_error());
    }
    // else{
    //     echo "connection was succesfully";
    // }

?>