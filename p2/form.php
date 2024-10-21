<?php
    include("connection.php");
    session_start();
    if(isset($_SESSION['user_email']) != "malasanadeep@gmail.com"){
      echo "<script>alert('you are not admin.');window.location.href='/p2/login.php';</script>";
    }
  
// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product_name = mysqli_real_escape_string($conn, $_POST['product_name']);
    $product_cat = mysqli_real_escape_string($conn, $_POST['product_category']);
    $product_price = mysqli_real_escape_string($conn, $_POST['product_price']);

    // Handle file upload
    $target_dir = "uploads/"; // Ensure this folder exists and is writable
    $target_file = $target_dir . basename($_FILES["product_image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image file is an actual image or fake
    if (isset($_POST["submit"])) {
        $check = getimagesize($_FILES["product_image"]["tmp_name"]);
        if ($check !== false) {
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }

    // Check file size (limit to 2MB)
    if ($_FILES["product_image"]["size"] > 2000000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        // If everything is ok, try to upload file
        if (move_uploaded_file($_FILES["product_image"]["tmp_name"], $target_file)) {
            // File uploaded successfully, now insert data into the database
            $sql = "INSERT INTO product (name, category,price, image)
                    VALUES ('$product_name', '$product_cat', '$product_price', '$target_file')";

            if (mysqli_query($conn, $sql)) {
                echo "<script>alert('Added Product successfully...');</script>";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="shortcut icon" href="img/abstract-circle-wave-logo-png-image-11.png" type="image/x-icon">
    
</head>
<body class="bg-gray-100 p-5">
    
<nav class="bg-gray-800 p-4">
        <div class="container mx-auto flex justify-between items-center">
            <div class="flex items-center">
                <img src="img/abstract-circle-wave-logo-png-image-11.png" alt="Company Logo" class="h-10 mr-5"><p class="text-white text-xl font-mono hover:text-aqua">Ocean Wave Ceramic</p>
            </div>
            <div class="hidden md:flex space-x-6 text-white">
                <a href="#home" class="hover:bg-gray-700 px-3 py-2 rounded"></a>
                <a href="admin.php" class="hover:bg-gray-700 px-3 py-2 rounded">user details</a>
                <a href="form.php" class="hover:bg-gray-700 px-3 py-2 rounded">Add tiles</a>
                <a href="req-admin.php" class="hover:bg-gray-700 px-3 py-2 rounded">Request Price</a>
                <a href="inquiry-admin.php" class="hover:bg-gray-700 px-3 py-2 rounded">Inquiry</a>
                <a href="order-admin.php" class="hover:bg-gray-700 px-3 py-2 rounded">Order</a>
                <?php
  echo "<a href='logout.php' class='hover:bg-gray-700 px-3 py-2 rounded '>log-out</a>";
  ?>
                <!--<a href="#booking" class="hover:bg-gray-700 px-3 py-2 rounded">Booking</a> -->
            </div>
            <div class="md:hidden flex items-center">
                <button class="text-white focus:outline-none" id="menu-button">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
        <div class="md:hidden bg-gray-800 text-white space-y-1 px-2 pt-2 pb-3 hidden" id="mobile-menu">
            <a href="admin.php" class="hover:bg-gray-700 px-3 py-2 rounded">user details</a>
            <a href="form.php" class="hover:bg-gray-700 px-3 py-2 rounded">Add tiles</a>
            <!-- <a href="export.php" class="block px-3 py-2 rounded hover:bg-gray-700">Export</a>
            <a href="product.php" class="block px-3 py-2 rounded hover:bg-gray-700">Product</a>
            <a href="contact.php" class="block px-3 py-2 rounded hover:bg-gray-700">Contact Us</a>
            <a href="#booking" class="block px-3 py-2 rounded hover:bg-gray-700">Booking</a> -->
        </div>
    </nav>

    <div class="container mx-auto mt-10">
        <h1 class="text-2xl font-bold mb-6">Add New Product</h1>
        <form action="" method="POST" enctype="multipart/form-data" class="bg-white p-6 rounded-lg shadow-lg">

            <div class="mb-4">
                <label for="product_name" class="block text-gray-700">Product Name</label>
                <input type="text" id="product_name" name="product_name" class="w-full px-3 py-2 border rounded" required>
            </div>

            <div class="mb-4">
                <label for="product_description" class="block text-gray-700">Product Category</label>
                <input id="product_description" name="product_category" class="w-full px-3 py-2 border rounded" required>
            </div>

            <div class="mb-4">
                <label for="product_price" class="block text-gray-700">Product Price</label>
                <input type="number" step="0.01" id="product_price" name="product_price" class="w-full px-3 py-2 border rounded" required>
            </div>

            <div class="mb-4">
                <label for="product_image" class="block text-gray-700">Product Image</label>
                <input type="file" id="product_image" name="product_image" class="w-full px-3 py-2 border rounded" required>
            </div>

            <button type="submit" name="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Add Product</button>
        </form>
    </div>

</body>
</html>
