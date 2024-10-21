<?php

session_start();

if(isset($_SESSION['user_email']) == null){
    echo "<script>alert('Please Login First');window.location.href='login.php';</script>";

}

session_abort();
?>
<?php include("header_and_footers/header.php"); ?>

    <!-- Wishlist Content -->
    <main class="py-10 bg-gray-700">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-4">
            <div class="bg-gray-600  shadow overflow-hidden sm:rounded-lg p-6 ">
                <!-- Wishlist Item -->
                 <?php

                    // session_start();

                    include('connection.php');


                    if($res=mysqli_query($conn,"SELECT * FROM `wishlist` WHERE `user_email`='". $_SESSION['user_email'] ."'")){
                        $num = mysqli_num_rows($res);
                        if($num==0){
                            echo '<div class="flex items-center justify-between py-4 border-b border-gray-700">
                    <div class="flex items-center">
                        <div class="ml-4">
                            <h2 class="text-lg font-semibold text-gray-900">Cart is empty.</h2>
                        </div>
                    </div>
                </div>';
                        }
                        else{
                
                        while($row=mysqli_fetch_assoc($res)){

                            $prod_id = $row['prod_id'];

                            if($res2=mysqli_query($conn,"SELECT * FROM `product` WHERE `id`='$prod_id'")){

                                while($inner_row=mysqli_fetch_assoc($res2)){
                                    echo '<div class="flex items-center justify-between py-4 border-b border-gray-700">
                    <div class="flex items-center">
                        <img class="h-24 w-24 rounded-lg object-cover" src="'. $inner_row['image'] .'" alt="Tile Image">
                        <div class="ml-4">
                            <h2 class="text-lg font-semibold text-gray-900">'. $inner_row['name'] .'</h2>
                            <h2 class="text-lg font-semibold text-gray-900">'. $inner_row['category'] .'</h2>
                        </div>
                    </div>
                    <div class="flex space-x-4">
                            <button class="addToCart bg-gray-700 text-white px-2 py-2 rounded-lg hover:bg-indigo-600" name="submit" product_id="'. $inner_row['id'] .'" user="'. $_SESSION['user_email'] .'">Add To cart</button>

                        <button class="removeFromWishlist bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600 " pid="'. $inner_row['id'] .'" user="'. $_SESSION['user_email'] .'">Remove</button>
                    </div>
                </div>';
                                }

                            }

                            

                        }                        
                
                    }
                
                    }


                 ?>
                
                <!-- More Wishlist Items -->
                <!-- <div class="flex items-center justify-between py-4 border-b border-gray-200">
                    <div class="flex items-center">
                        <img class="h-24 w-24 rounded-lg object-cover" src="https://via.placeholder.com/150" alt="Tile Image">
                        <div class="ml-4">
                            <h2 class="text-lg font-semibold text-gray-900">Another Tile</h2>
                            <p class="text-gray-600">Another tile description. Lorem ipsum dolor sit amet.</p>
                        </div>
                    </div>
                    <div class="flex space-x-4">
                        <button class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">Remove</button>
                        <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Add to Cart</button>
                    </div>
                </div> -->
            </div>
        </div>
        
            
    </main>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
            
            $('.removeFromWishlist').click(function(){

                let pid = $(this).attr('pid').toString();
                let user_email = $(this).attr('user').toString();

                let ele = this.parentNode.parentNode

                $.ajax({
                    url : 'removeFromWishlist.php',
                    method : 'POST',
                    data : {
                        prod_id : pid,
                        user_email : user_email,
                    },  
                    success :function(response){
                        

                        if(response == "deleted"){
                            // ele.classList.add('text-white');
                            // ele.classList.remove('text-red-500');
                            ele.remove();

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
            <?php include("header_and_footers/footer.php"); ?>