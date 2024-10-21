<?php
        session_start();
        if(isset($_SESSION['user_email']) == null){
            echo "<script>alert('Please Login First.');window.location.href='login.php'</script>";

        }
        ?>
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buy Now Quick View</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-white">
    <!-- Buy Now Modal -->
    <div class="flex justify-center items-center h-screen">
        <div class="bg-gray-800 p-4 rounded-lg w-full max-w-4xl shadow-lg">
            <!-- Modal Content -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Tile Image -->
                
                    <!-- <div class="grid grid-cols-3 gap-2">-->
                        <!-- <img src="https://via.placeholder.com/100" alt="Tile Image" class="w-full h-auto object-cover rounded"> -->
                        <!-- <img src="https://via.placeholder.com/100" alt="Tile Image" class="w-full h-auto object-cover rounded"> -->
                        <!-- <img src="https://via.placeholder.com/100" alt="Tile Image" class="w-full h-auto object-cover rounded"> -->
                    <!-- </div>  -->
                <?php
        if(isset($_POST['submit'])){
            include("connection.php");
            $query = mysqli_query($conn,"SELECT * FROM `product` WHERE `id`='". $_POST['product'] ."'");
            $num = mysqli_num_rows($query);
            if($num > 0){

                $row = mysqli_fetch_assoc($query);
                echo '
                <div class="space-y-4">
                    <img src="'. $row['image'] .'" alt="Tile Image" class="w-full h-auto object-cover rounded">
                    </div>
                <div>
                    <h2 class="text-xl font-semibold">'. $row['name'] .'</h2>
                    <p class="text-sm text-gray-400 mt-2">SKU: MYT-F-6001200-Code17674</p>
                    <p class="text-sm text-gray-400">600x1200mm | Matt</p>
                    <p class="text-sm text-gray-400 mt-1">Category: '. $row['category'] .'</p>

                    <div class="mt-4">
                        <label for="sqft" class="text-sm">Select Quantity</label>
                        <label for="sqft" class="text-sm">Select Address</label>
                        <div class="flex items-center mt-2">
                            <input type="text" id="sqft" placeholder="address" class="border border-gray-600 bg-gray-700 text-white p-2 rounded-l w-full">
                        </div>

                    </div>

                    <p class="mt-4 text-xl font-semibold">Total Amount: ₹'. $row['price'] .'</p>';

            }

        }
?>
                <!-- Product Details -->
                

                    <!-- Checkout Button -->
                     <form action="" method="post">
                        <input type="hidden" name="user" value=<?php echo $_SESSION['user_email']; ?>>
                        <input type="hidden" name="product_id" value=<?php echo $_POST['product']; ?>>
                        <!-- <input type="hidden" name="product_id" value=<?php echo $_POST['product']; ?>> -->

                    <button type="submit" name="ordered" class="w-full bg-yellow-500 text-black p-3 rounded mt-4 hover:bg-yellow-600">Checkout</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
