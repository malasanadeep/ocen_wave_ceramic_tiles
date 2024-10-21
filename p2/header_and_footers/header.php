<?php
session_start();
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
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fadeInUp {
            animation: fadeInUp 0.5s ease-out forwards;
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
            animation: fadeIn 2s ease-in-out;
        }

        @keyframes textPop {
            0% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.1);
            }
            100% {
                transform: scale(1);
            }
        }

     /* Image Slider Styles */
.image-slider {
    position: relative;
    max-width: 100%;
    overflow: hidden;
    margin: 0 auto;
}

.slider-container {
    display: flex;
    transition: transform 0.5s ease-in-out;
}

.slider-slide {
    min-width: 100%;
    box-sizing: border-box;
}

.slider-slide img {
    width: 100%;
    height: auto;
    display: block;
}

button.prev, button.next {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background-color: rgba(0, 0, 0, 0.5);
    color: #fff;
    border: none;
    padding: 10px;
    cursor: pointer;
    border-radius: 50%;
    font-size: 24px;
    z-index: 100;
}

button.prev {
    left: 10px;
}

button.next {
    right: 10px;
}

button.prev:hover, button.next:hover {
    background-color: rgba(0, 0, 0, 0.8);
}

    </style>
</head>
<body class="bg-gray-100">
    <nav class="bg-gray-800 p-4">
        <div class="container mx-auto flex justify-between items-center">
            <div class="flex items-center">
                <img src="img/abstract-circle-wave-logo-png-image-11.png" alt="Company Logo" class="h-10 mr-5"><p class="text-white text-xl font-mono hover:text-aqua">Ocean Wave Ceramic</p>
            </div>
            <div class="hidden md:flex space-x-6 text-white">
                <a href="#home" class="hover:bg-gray-700 px-3 py-2 rounded"></a>
                <a href="index.php" class="hover:bg-gray-700 px-3 py-2 rounded">Home</a>
                <a href="about.php" class="hover:bg-gray-700 px-3 py-2 rounded">Company</a>
                <a href="export.php" class="hover:bg-gray-700 px-3 py-2 rounded">Export</a>
                <a href="product.php" class="hover:bg-gray-700 px-3 py-2 rounded">Product</a>
                <a href="contact.php" class="hover:bg-gray-700 px-3 py-2 rounded">Contact Us</a>
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
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
        <div class="md:hidden bg-gray-800 text-white space-y-1 px-2 pt-2 pb-3 hidden" id="mobile-menu">
            <a href="index.php" class="block px-3 py-2 rounded hover:bg-gray-700">Home</a>
            <a href="about.php" class="block px-3 py-2 rounded hover:bg-gray-700">Company</a>
            <a href="export.php" class="block px-3 py-2 rounded hover:bg-gray-700">Export</a>
            <a href="product.php" class="block px-3 py-2 rounded hover:bg-gray-700">Product</a>
            <a href="contact.php" class="block px-3 py-2 rounded hover:bg-gray-700">Contact Us</a>
            <a href="wishlist.php" class="hover:bg-gray-700 px-3 py-2 rounded">Wishlist</a>

            <a href="buy-now.php" class="hover:bg-gray-700 px-3 py-2 rounded">Buy now</a>

            <a href="#booking" class="block px-3 py-2 rounded hover:bg-gray-700">Booking</a>
        </div>
    </nav>