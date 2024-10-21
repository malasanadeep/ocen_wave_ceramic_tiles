<?php
$con = mysqli_connect("localhost", "root", "", "project");

if (!$con) {

    echo "Not Connected";

} else {
    $insert = false;
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {


        $f_name = $_POST['f_name'];
        $l_name = $_POST['l_name'];
        $address = $_POST['address'];
        $message = $_POST['message'];




        $query = "INSERT INTO `contact`( `f_name`, `l_name`, `address`, `message`) VALUES ('$f_name','$l_name','$address','$message')";

        $result = mysqli_query($con, $query);

        if ($result) {
            $insert = true;

            // echo "<script>alert('inquiry sent...');</script>"; ?>
            <!DOCTYPE html>
            <html lang="en">

            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title></title>
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
                    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
                    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
                    crossorigin="anonymous"></script>

            </head>

            <body>
                <?php
                if ($insert) {
                    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
            <strong>Success!</strong>Your Inquiry sent succesfully.
          <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>";
                }
                ?>

            </body>

            </html>
            <?php

        } else {
            echo "<script>alert('inquiry Not sent...');</script>";

        }



    }

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ocean Wave Ceramic</title>
    <link rel="shortcut icon" href="img/abstract-circle-wave-logo-png-image-11.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


    <style>
        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-slideIn {
            animation: slideIn 0.5s ease-out forwards;
        }

        @keyframes buttonHover {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.05);
            }

            100% {
                transform: scale(1);
            }
        }

        .hover\:animate-buttonHover:hover {
            animation: buttonHover 0.5s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .animate-fadeIn {
            animation: fadeIn 0.5s ease-out forwards;
        }
    </style>
</head>

<body class="bg-gray-100">
    <nav class="bg-gray-800 p-4">
        <div class="container mx-auto flex justify-between items-center">
            <div class="flex items-center">
                <img src="img/abstract-circle-wave-logo-png-image-11.png" alt="Company Logo" class="h-10 mr-5">
                <p class="text-white text-xl font-mono hover:text-aqua">Ocean Wave Ceramic</p>
            </div>
            <div class="hidden md:flex space-x-6 text-white">
                <a href="index.php" class="hover:bg-gray-700 px-3 py-2 rounded">Home</a>
                <a href="about.php" class="hover:bg-gray-700 px-3 py-2 rounded">Company</a>
                <a href="export.php" class="hover:bg-gray-700 px-3 py-2 rounded">Export</a>
                <a href="product.php" class="hover:bg-gray-700 px-3 py-2 rounded">Product</a>
                <a href="#contact" class="hover:bg-gray-700 px-3 py-2 rounded">Contact Us</a>
                <a href="wishlist.php" class="hover:bg-gray-700 px-3 py-2 rounded">Wishlist</a>
                <a href="cart.php" class="hover:bg-gray-700 px-3  rounded"> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="file: mt-2 h-6 w-6">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
  </svg></a>
                <?php
                    if (isset($_SESSION['is_user']) == true) {
                        echo '<a href="logout.php" class="hover:bg-gray-700 px-3 py-2 rounded">Log out</a>';
                    } else {
                        echo '<a href="login.php" class="hover:bg-gray-700 px-3 py-2 rounded">Log In</a>';
                    }
                ?>
            </div>
            <div class="md:hidden flex items-center">
                <button class="text-white focus:outline-none" id="menu-button">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
        <div class="md:hidden bg-gray-800 text-white space-y-1 px-2 pt-2 pb-3 hidden" id="mobile-menu">
            <a href="index.php" class="block px-3 py-2 rounded hover:bg-gray-700">Home</a>
            <a href="about.php" class="block px-3 py-2 rounded hover:bg-gray-700">Company</a>
            <a href="export.php" class="block px-3 py-2 rounded hover:bg-gray-700">Export</a>
            <a href="#product" class="block px-3 py-2 rounded hover:bg-gray-700">Product</a>
            <a href="#contact" class="block px-3 py-2 rounded hover:bg-gray-700">Contact Us</a>
            <a href="buy-now.php" class="hover:bg-gray-700 px-3  rounded"> <svg
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="file: mt-2 h-6 w-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                            </svg></a>
        </div>
    </nav>

    <!-- Contact Us Section -->
    <div class="container mx-auto p-6 mt-6 bg-white rounded-lg shadow-lg animate-slideIn">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Inquiry Form -->
            <div>
                <h2 class="text-3xl font-bold mb-6">Inquiry Form</h2>
                <form action="#" method="POST" class="space-y-4">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label for="first-name" class="block text-sm font-medium text-gray-700 mb-1">First
                                Name</label>
                            <input type="text" id="f_name" name="f_name"
                                class="w-full px-4 py-2 bg-gray-100 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                required>
                        </div>
                        <div>
                            <label for="last-name" class="block text-sm font-medium text-gray-700 mb-1">Last
                                Name</label>
                            <input type="text" id="l_name" name="l_name"
                                class="w-full px-4 py-2 bg-gray-100 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                required>
                        </div>
                    </div>
                    <div>
                        <label for="address" class="block text-sm font-medium text-gray-700 mb-1">Address</label>
                        <input type="text" id="address" name="address"
                            class="w-full px-4 py-2 bg-gray-100 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                            required>
                    </div>
                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Message</label>
                        <textarea id="message" name="message" rows="4"
                            class="w-full px-4 py-2 bg-gray-100 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                            required></textarea>
                    </div>
                    <button type="submit"
                        class="w-full py-2 bg-blue-600 text-white font-bold rounded-lg hover:bg-blue-700 transition-colors duration-300">Submit
                        Inquiry</button>
                </form>
            </div>

            <!-- Address and Google Map -->
            <div>
                <h2 class="text-3xl font-bold mb-6">Our Address</h2>
                <p class="text-gray-700 mb-4">421 Tile Street<br> Ceramic City<br>Morbi 363641<br>india.</p>
                <div class="w-full h-64 bg-gray-200 rounded-lg overflow-hidden">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.835434509853!2d144.95373531550433!3d-37.817209742014524!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642af0f11fd81%3A0xf5774b0a0b8b8d7d!2sFederation%20Square!5e0!3m2!1sen!2sau!4v1646647857768!5m2!1sen!2sau"
                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy">
                    </iframe>
                </div>
            </div>
            <!-- Contact Information -->
            <div>
                <h2 class="text-3xl font-bold mb-4">Contact Information</h2>
                <p class="text-gray-700 mb-2"><strong>Mobile:</strong> 8866155650</p>
                <p class="text-gray-700"><strong>Email:</strong> oceanwave@gmail.com</p>
            </div>

            <!-- Follow Us and Social Media Icons -->
            <div>
                <h2 class="text-3xl font-bold mb-4">Follow Us</h2>
                <div class="flex space-x-4">
                    <a href="#" class="text-gray-700 hover:text-blue-600 transition-colors duration-300">
                        <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M22.675 0H1.325C.594 0 0 .593 0 1.326v21.348C0 23.407.593 24 1.325 24h11.497V14.7h-3.13v-3.624h3.13V8.576c0-3.1 1.897-4.79 4.666-4.79 1.325 0 2.463.099 2.795.144v3.24l-1.92.001c-1.504 0-1.794.714-1.794 1.761v2.308h3.587l-.467 3.624h-3.12V24h6.11c.73 0 1.324-.593 1.324-1.326V1.326C24 .593 23.407 0 22.675 0z" />
                        </svg>
                    </a>
                    <a href="#" class="text-gray-700 hover:text-blue-400 transition-colors duration-300">
                        <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M24 4.557a9.827 9.827 0 0 1-2.828.775A4.93 4.93 0 0 0 23.337 3c-.961.57-2.025.978-3.163 1.2A4.92 4.92 0 0 0 16.843 3c-2.718 0-4.92 2.201-4.92 4.917 0 .386.043.761.128 1.122-4.088-.205-7.718-2.163-10.141-5.138A4.885 4.885 0 0 0 1.671 6.03c0 1.706.869 3.215 2.188 4.1a4.936 4.936 0 0 1-2.229-.616v.061c0 2.384 1.698 4.376 3.946 4.83a4.948 4.948 0 0 1-2.224.085 4.937 4.937 0 0 0 4.605 3.418A9.867 9.867 0 0 1 0 21.54a13.94 13.94 0 0 0 7.548 2.213c9.142 0 14.143-7.72 14.143-14.425 0-.22-.005-.437-.014-.653A10.125 10.125 0 0 0 24 4.557z" />
                        </svg>
                    </a>
                    <a href="#" class="text-gray-700 hover:text-pink-500 transition-colors duration-300">
                        <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12 0C5.37 0 0 5.37 0 12c0 5.303 3.438 9.8 8.205 11.387-.113-.975-.213-2.475.045-3.542.232-.93 1.498-5.9 1.498-5.9s-.383-.764-.383-1.893c0-1.775 1.027-3.099 2.304-3.099 1.086 0 1.61.814 1.61 1.789 0 1.09-.692 2.72-1.048 4.223-.297 1.265.63 2.296 1.867 2.296 2.238 0 3.96-2.356 3.96-5.754 0-3.008-2.162-5.116-5.261-5.116-3.586 0-5.685 2.691-5.685 5.476 0 1.094.42 2.269.945 2.905.105.125.12.234.09.36-.098.386-.318 1.233-.36 1.405-.054.219-.177.267-.41.162-1.53-.63-2.48-2.607-2.48-4.21 0-3.414 2.484-6.557 7.164-6.557 3.75 0 6.674 2.674 6.674 6.255 0 3.726-2.349 6.73-5.597 6.73-1.093 0-2.12-.578-2.47-1.266l-.673 2.55c-.243.926-.91 2.086-1.355 2.79 1.015.312 2.08.482 3.197.482 6.628 0 12-5.37 12-12C24 5.37 18.63 0 12 0z" />
                        </svg>
                    </a>
                    <a href="#" class="text-gray-700 hover:text-blue-500 transition-colors duration-300">
                        <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M22.225 0H1.775C.791 0 0 .791 0 1.775v20.45C0 23.209.791 24 1.775 24h20.45C23.209 24 24 23.209 24 22.225V1.775C24 .791 23.209 0 22.225 0zM7.185 20.452H3.547V9.039h3.638v11.413zm-1.819-12.96c-1.18 0-1.939-.77-1.939-1.742 0-.993.778-1.743 1.98-1.743s1.939.75 1.958 1.743c0 .973-.779 1.742-1.958 1.742zm14.947 12.96h-3.638v-6.059c0-1.524-.548-2.564-1.913-2.564-1.044 0-1.668.699-1.942 1.376-.1.233-.127.555-.127.879v6.368h-3.638v-7.733c0-1.325-.024-2.414-.048-3.358h3.138v1.448c.419-.645 1.167-1.567 2.844-1.567 2.078 0 3.63 1.356 3.63 4.271v6.939h-.003z" />
                        </svg>
                    </a>

                </div>
            </div>
        </div>
    </div>

    <!-- Footer Section -->
    <footer class="bg-gray-800 text-white py-8 animate-fadeIn">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-between items-start space-y-8 md:space-y-0 md:space-x-8">
                <!-- Vertically Aligned Navbar -->
                <div>
                    <h3 class="text-xl font-bold mb-4">Navigation</h3>
                    <nav class="flex flex-col space-y-2">
                        <a href="index.php" class="hover:text-gray-400 hover:animate-textPop">Home</a>
                        <a href="about.php" class="hover:text-gray-400 hover:animate-textPop">Company</a>
                        <a href="export.php" class="hover:text-gray-400 hover:animate-textPop">Export</a>
                        <a href="product.php" class="hover:text-gray-400 hover:animate-textPop">Products</a>
                        <a href="#" class="hover:text-gray-400 hover:animate-textPop">Contact Us</a>

                       
                </div>
                <!-- Address -->
                <div>
                    <h3 class="text-xl font-bold mb-4">Address</h3>
                    <address class="not-italic">
                        421 Tile Street<br>
                        Ceramic City,Morbi 363641<br>
                        india.
                    </address>
                </div>
                <!-- Follow Us on Social Media -->
                <div>
                    <h3 class="text-xl font-bold mb-4">Follow Us</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="hover:text-gray-400 hover:animate-textPop"><i class="fab fa-facebook"></i>
                            Facebook</a>
                        <a href="#" class="hover:text-gray-400 hover:animate-textPop"><i class="fab fa-twitter"></i>
                            Twitter</a>
                        <a href="https://www.instagram.com/deep_malasana_26/"
                            class="hover:text-gray-400 hover:animate-textPop"><i class="fab fa-instagram"></i>
                            Instagram</a>
                    </div>
                </div>
                <!-- Products -->
                <div>
                    <h3 class="text-xl font-bold mb-4">Products</h3>
                    <nav class="flex flex-col space-y-2">
                        <a href="bedroom-tile.php" class="hover:text-gray-400 hover:animate-textPop">Bed Room Tiles</a>
                        <a href="bathroom-tile.php" class="hover:text-gray-400 hover:animate-textPop">Bath Room
                            Tiles</a>
                        <a href="livingroom-tile.php" class="hover:text-gray-400 hover:animate-textPop">Living Room
                            Tiles</a>
                        <a href="kitchen-tile.php" class="hover:text-gray-400 hover:animate-textPop">Kitchen Tiles</a>
                        <a href="poster-tile.php" class="hover:text-gray-400 hover:animate-textPop">Poster Tiles</a>
                    </nav>
                </div>
                <!-- Contact Information -->
                <div>
                    <h3 class="text-xl font-bold mb-4">Contact</h3>
                    <p>Email: <a href="mailto:oceanwave.com"
                            class="hover:text-gray-400 hover:animate-textPop">oceanwave@gmail.com</a></p>
                    <p>Phone: <a href="tel:+1234567890" class="hover:text-gray-400 hover:animate-textPop">+91
                            8866155650</a></p>
                    <p>Phone: <a href="tel:+1234567890" class="hover:text-gray-400 hover:animate-textPop">+91
                            6352635638</a></p>
                </div>
            </div>
            <!-- Copyright Notice -->
            <div class="mt-8 text-center text-gray-500">
                &copy; 2024 Ocean Waves Tiles Inc. All rights reserved.
            </div>
        </div>
    </footer>
    <script>
        // Navbar Toggle
        document.addEventListener('DOMContentLoaded', function () {
            const menuButton = document.getElementById('menu-button');
            const mobileMenu = document.getElementById('mobile-menu');

            menuButton.addEventListener('click', function () {
                mobileMenu.classList.toggle('hidden');
            });
        });
    </script>
</body>

</html>