<?php

    include("connection.php");

    if($_POST['product_id'] != null && $_POST['user_id'] != null){

        $num =$_POST['product_id'];
        
        if($select=mysqli_query($conn,"SELECT * FROM `cart` WHERE `product_id`='". $num ."' AND `user_id`='". $_POST['user_id'] ."'")){

            $row = mysqli_fetch_assoc($select);
            if($row['qty'] > 1){
                $update = "UPDATE `cart` SET `qty`=qty-1 WHERE `product_id` = '".$num."' AND `user_id`='". $_POST['user_id'] ."'";

                if(mysqli_query($conn,$update)){
        
                    echo "decreased";
        
                }
            }
            else{
                echo "nope";
            }

        }



    }

?>