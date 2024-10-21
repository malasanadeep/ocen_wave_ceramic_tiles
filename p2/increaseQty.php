<?php

include("connection.php");

if($_POST['product_id'] == null || $_POST['user_id'] == null){
    
    
    
    
    
}
    else{    
        $num =$_POST['product_id'];

        $update = "UPDATE `cart` SET `qty`=qty+1 WHERE `product_id` = '".$num."' AND `user_id`='". $_POST['user_id'] ."'";

        if(mysqli_query($conn,$update)){

            echo "increased";

        }
    }
?>