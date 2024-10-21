<?php
    include('connection.php');


    if($_POST['product_id'] == null || $_POST['user_id'] == null){

        echo "invalid";

    }
    else{


        $select_query = mysqli_query($conn,"SELECT * FROM `cart` WHERE `product_id`='".$_POST['product_id']."' AND `user_id`='".$_POST['user_id']."'");
        $num= mysqli_num_rows($select_query);

        if($num > 0){

            echo "existed";


        }
        else{

            $res = mysqli_query($conn,"INSERT INTO `cart`( `product_id` ,`user_id`) VALUES ('".$_POST['product_id']."','".$_POST['user_id']."')");
            echo "added";


        }
    }


?>
