<?php

    include("connection.php");

    if($_POST['product_id'] != null && $_POST['user_id'] != null){

        $num =$_POST['product_id'];
        

        $update = "DELETE FROM `cart` WHERE `product_id` = '".$num."' AND `user_id`='". $_POST['user_id'] ."'";

        if(mysqli_query($conn,$update)){

            echo "deleted";

        }


    }

?>