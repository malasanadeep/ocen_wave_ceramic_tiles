<?php

    include("connection.php");

    if($_POST['prod_id'] != null && $_POST['user_email'] != null){

        $num =$_POST['prod_id'];
        

        $update = "DELETE FROM `wishlist` WHERE `prod_id` = '".$num."' AND `user_email`='". $_POST['user_email'] ."'";

        if(mysqli_query($conn,$update)){

            echo "deleted";

        }


    }

?>