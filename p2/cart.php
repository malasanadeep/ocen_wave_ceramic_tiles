<?php 
    session_start();

    if(isset($_SESSION['user_email']) == null){

        echo "<script>alert('Please Login First To Visit Your Cart Products...');window.location.href='/p2/login.php'</script>";

    }
    session_abort();
?>

<?php include('header_and_footers/header.php'); ?>


    <!-- Cart Page Container -->
    <div class="container mx-auto mt-10 mb-5">
        <!-- Cart Items Section -->
        <div class="flex flex-col lg:flex-row">
            <!-- Cart Items -->
            <div class="w-full lg:w-3/4 bg-white p-5 shadow-lg rounded-lg mb-5 lg:mb-0">
                <h1 class="text-2xl font-semibold border-b pb-4 mb-4">Shopping Cart</h1>
                <?php
                    include("connection.php");
                    $cart = "SELECT * FROM `cart` WHERE `user_id`='". $_SESSION['user_email'] ."'";
                    $res=mysqli_query($conn,$cart);
                    $num = mysqli_num_rows($res);
                    $subtotal = 0;
                    $total = 0;
                    if($num>0){

                        while($row=mysqli_fetch_assoc($res)){
                            $product = "SELECT * FROM `product` WHERE `id`=". $row['product_id'] ."";
                            $res_pro = mysqli_query($conn,$product);
                            while($inner_row=mysqli_fetch_assoc($res_pro)){
                                $subtotal += $inner_row["price"] * $row["qty"]; 
                                echo '<div class="flex items-center justify-between border-b py-5">
                    <div class="flex items-center">
                        <img src="'. $inner_row['image'] .'" class="w-20 h-20 object-cover rounded" alt="Product Image">
                        <div class="ml-4">
                            <p class="text-lg font-semibold">'. $inner_row['name'] .'</p>
                            <p class="text-gray-600">'. $inner_row['category'] .'</p>
                        </div>
                    </div>
                    <div class="flex items-center space-x-4">
                    <button class="plus_btn px-2 py-1 bg-gray-200 rounded text-gray-600 hover:bg-gray-300" pid="'. $inner_row['id'] .'" user="'. $_SESSION['user_email'] .'">+</button>
                        <input type="text" value="'. $row['qty'] .'" class="w-16 text-center border rounded" readonly>
                    <button class="minus_btn px-2 py-1 bg-gray-200 rounded text-gray-600 hover:bg-gray-300" pid="'. $inner_row['id'] .'" user="'. $_SESSION['user_email'] .'">-</button>

                        <p class="text-lg font-semibold">₹'. $inner_row['price'] .'</p>
                        <button class="remove_from text-red-500 hover:text-red-700" pid="'. $inner_row['id'] .'" user="'. $_SESSION['user_email'] .'">Remove</button>
                    </div>
                </div>';
                            }

                        }

                        $total = $subtotal + 10;

                    }
                    else{

                        echo '<div class="max-w-sm w-full bg-white shadow-md rounded-lg p-6">Your Cart is Empty.</div>';

                        $total = 0;

                    }
                ?>
                <!-- Cart Item 1 -->
                

                

                <!-- Continue Shopping Link -->
                <div class="mt-5">
                    <a href="/p2/product.php" class="text-blue-500 hover:underline">Continue Shopping</a>
                </div>
            </div>

            <!-- Cart Summary Section -->
            <div class="w-full lg:w-1/4 lg:ml-5 bg-white p-5 shadow-lg rounded-lg">
                <h2 class="text-xl font-semibold border-b pb-4 mb-4">Order Summary</h2>
                <div class="flex justify-between py-2">
                    <p class="text-gray-600">Subtotal</p>
                    <p class="text-gray-800 font-semibold">₹<?php echo $subtotal; ?></p>
                </div>
                <div class="flex justify-between py-2">
                    <p class="text-gray-600">Shipping</p>
                    <p class="text-gray-800 font-semibold">₹<?php if($total<=0){ echo "00.00"; } else{ echo "10.00"; } ?></p>
                </div>
                <div class="flex justify-between py-4 text-lg font-semibold">
                    <p>Total</p>
                    <p>₹<?php echo $total; ?></p>
                </div>
                <?php
                if($total > 0){
                    
                    echo '<button class="orderBtn w-full bg-blue-500 text-white py-2 rounded hover:bg-blue-600" order_total="'.$total.'" user_id="'.$_SESSION['user_email'].'">Proceed to Checkout</button>';
                }
                ?>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        $('.plus_btn').click(function(){

            let pid = $(this).attr('pid').toString();
            let user = $(this).attr('user').toString();
            let ele =this

            $.ajax({
                url : 'increaseQty.php',
                type : "POST",
                data : {
                    product_id : pid,
                    user_id : user
                },
                success :function(response){
                    if(response=="increased"){
                        window.location.href = "/p2/cart.php";
                    }
                }
            })

        });
        $('.minus_btn').click(function(){

            let pid = $(this).attr('pid').toString();
            let user = $(this).attr('user').toString();

            let ele =this

            $.ajax({
                url : 'decreaseQty.php',
                type : "POST",
                data : {
                    product_id : pid,
                    user_id : user

                },
                success :function(response){
                    if(response=="decreased"){
                        window.location.href = "/p2/cart.php";

                    }
                    else if(response=="nope"){
                        alert("It can\'t Beacause you have only 1 quantity left...");
                    }
                }
            })

        });
        $('.remove_from').click(function(){

            let pid = $(this).attr('pid').toString();
            let ele =this
            let user = $(this).attr('user').toString();


            $.ajax({
                url : 'removeProduct.php',
                type : "POST",
                data : {
                    product_id : pid,
                    user_id :user
                },
                success :function(response){
                    if(response=="deleted"){
                        
                        window.location.href = "/p2/cart.php";

                    }
                }
            })

        });

        $('.orderBtn').click(function(){

            let total = $(this).attr('order_total').toString();
            let user = $(this).attr('user_id').toString();

            $.ajax({
                url : 'ordered.php',
                type : 'POST',
                data : {
                    total : total,
                    user_id : user,

                },
                success :function(response){

                    // alert(response);
                    if(response == "ordered"){

                        alert("You Ordered Successfully");
                        window.location.href = "/p2/index.php";
                        
                    }
                    else if(response == "try again"){
                        alert("Something Went Wrong Please Try Again...")
                    }
                }
            })



        });
        </script>

<?php include('header_and_footers/footer.php'); ?>
