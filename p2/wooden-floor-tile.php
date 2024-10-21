<?php

session_start();

if(isset($_SESSION['user_email']) == null){

    echo "<script>alert('Please Login First.');window.location.href='login.php'</script>";

}
session_abort();

?>
<?php include("header_and_footers/header.php"); ?>
    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-bold mb-6 text-black text-center">Wooden Floor Tiles</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            <!-- Product Card -->
             <?php

                include("connection.php");
                // session_start();
                $query = mysqli_query($conn,"SELECT * FROM `product` WHERE `category` = 'Wooden Floor tiles'");
                $user = $_SESSION['user_email'];

                while($row = mysqli_fetch_assoc($query)){  
                    $query2 = mysqli_query($conn,"SELECT * FROM `wishlist` WHERE `user_email` = '". $user ."' AND `prod_id`='". $row['id'] ."'");
                    $inner_row = mysqli_fetch_assoc($query2);
                    if(isset($inner_row['is_wishlisted']) == null){
                        $color = "text-white";
                    }
                    else{
                        $color = "text-red-500";
                    }
                        

                        echo '<div class=" bg-gray-800 p-4 rounded-lg shadow-md" >
                    <button class="addToWishlist '. $color .'" pid="'. $row['id'] .'" user_email="'. $user .'">
                        <svg class="h-6 w-6 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M3.172 3.172a4 4 0 015.656 0l.172.172.172-.172a4 4 0 015.656 5.656L10 14l-5.828-5.828a4 4 0 010-5.656z" />
                        </svg>
                    </button>
                    <img src="'. $row['image'] .'" alt="Product Image" class="w-full h-48 object-cover rounded-t-lg">
                    <div class="p-4">
                        <h2 class="text-lg text-white font-semibold">'. $row['name'] .'</h2>
                        <p class="text-gray-400">598X1198mm </p>
                        <p class="text-xl text-white font-bold mt-2">₹'. $row['price'] .'.00/Sq.Ft</p>
                        <div class="mt-4 flex justify-between">
                        <a href="request-price.php"><button class="bg-blue-500 text-white px-2 py-2 rounded-lg hover:bg-blue-600 me-2">Request for Price</button></a>
                            <button class="addToCart bg-gray-700 text-white px-2 py-2 rounded-lg hover:bg-indigo-600" name="submit" product_id="'. $row['id'] .'" user="'. $user .'">Add To cart</button>
                        </div>
                        <div class="mt-4 flex justify-between items-center">
                           
                        </div>
                    </div>
                </div>';


                }

             ?>
            
            <!-- More Product Cards can be added in a similar way -->
        </div>
    </div>
    <?php include("header_and_footers/footer.php"); ?>
    <!-- jQuery AJAX Script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
            
            $('.addToWishlist').click(function(){

                let pid = $(this).attr('pid').toString();
                let user_email = $(this).attr('user_email').toString();

                let ele = this

                $.ajax({
                    url : 'addTowishlist.php',
                    method : 'POST',
                    data : {
                        prod_id : pid,
                        user_email : user_email,
                    },  
                    success :function(response){

                        if(response == "added"){
                            ele.classList.remove('text-white');
                            ele.classList.add('text-red-500');

                        }
                        if(response == "removed"){
                            ele.classList.add('text-white');
                            ele.classList.remove('text-red-500');


                        }

                    }

                })

            });

            $('.addToCart').click(function(){
                let product = $(this).attr('product_id').toString();
                let user = $(this).attr('user').toString();

                $.ajax({

                    url : 'addToCart.php',
                    method : 'POST',
                    data : {
                        product_id :product,
                        user_id :user,
                    },
                    success :function(response){

                        // console.log(response)

                        if(response == "added"){
                            alert('Your Product is added into the cart.');
                        }
                        if(response == "existed"){

                            alert('Your Product is already existed.');

                        }
                        if(response == "invalid"){
                            alert("please login first.");
                        }

                    }


                });

            });

    </script>   
</body>

</html>
