<?php

    if(isset($_SESSION['user_email'])){
        echo "<script>alert('Please Login First.');window.location.href='login.php'</script>";

    }

    if($_POST['user_id'] != null && $_POST['total'] != null){
        include("connection.php");
        if(mysqli_query($conn,"DELETE FROM `cart` WHERE `user_id`='". $_POST['user_id'] ."'")){
            if(mysqli_query($conn,"INSERT INTO `ordered` (`user`,`total`) VALUES ('". $_POST['user_id'] ."','". $_POST['total'] ."')")){

            echo "ordered";
            }
        }
        else{
            echo "try again";

        }

    }

?>