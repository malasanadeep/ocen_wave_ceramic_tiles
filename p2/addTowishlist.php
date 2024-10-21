<?php
    include('connection.php');


    if($_POST['prod_id'] == null || $_POST['user_email'] == null){

        echo "not logged in";

    }
    else{


        $select_query = mysqli_query($conn,"SELECT * FROM `wishlist` WHERE `prod_id`='".$_POST['prod_id']."' AND `is_wishlisted`='1' AND `user_email`='".$_POST['user_email']."'");
        $num= mysqli_num_rows($select_query);

        if($num > 0){
            $query = mysqli_query($conn,"DELETE FROM `wishlist` WHERE `prod_id` ='".$_POST['prod_id']."'  AND `user_email`='".$_POST['user_email']."'");

            if($query){
                echo "removed";

            }

        }
        else{
            

            $res = mysqli_query($conn,"INSERT INTO `wishlist`( `prod_id`, `is_wishlisted` ,`user_email`) VALUES ('".$_POST['prod_id']."','1','".$_POST['user_email']."')");
            echo "added";


        }
    }


?>
