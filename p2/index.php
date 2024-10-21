<?php include("header_and_footers/header.php"); ?>
<section class="relative overflow-hidden bg-gray-200 p-8">
    <section class="image-slider">
        <div class="slider-container">
            <div class="slider-slide">
                <img src="img/indias-no1-tile-company.jpg" alt="Slide 1">
            </div>
            <div class="slider-slide">
                <img src="img/desh-ki-mitti-se-bani-tile-se-desh-ko-banate-hai.jpg" alt="Slide 2">
            </div>
            <div class="slider-slide">
                <img src="img/celebrating-35-years-of-excellence.jpg" alt="Slide 3">
            </div>
            <!-- Add more slides as needed -->
        </div>
        <button class="prev">❮</button>
        <button class="next">❯</button>
    </section>
    <section id="company-profile" class="container mx-auto p-8">
        <div class="flex flex-col md:flex-row items-center bg-white shadow-lg rounded-lg overflow-hidden">
            <div class="md:w-1/2 w-full">
                <img src="img/specto-ceramic.jpg" alt="Company Image" class="w-full h-full object-cover">
            </div>
            <div class="md:w-1/2 w-full p-8 bg-blue-100">
                <h2 class="text-3xl font-bold mb-4">Our Company</h2>
                <p class="text-gray-700 mb-4">
                    Welcome to our company! We are a leading provider of high-quality tiles, offering a wide range of products to meet all your tiling needs. Our mission is to deliver exceptional value and superior customer service. We take pride in our commitment to innovation, quality, and sustainability.
                </p>
                <p class="text-gray-700 mb-4">
                    With years of experience in the industry, we have established a reputation for excellence and reliability. Our team of experts is dedicated to helping you find the perfect tiles for your project, whether it’s for a residential or commercial space.
                </p>
                <p class="text-gray-700">
                    Contact us today to learn more about our products and services. We look forward to working with you!
                </p>
            </div>
        </div>
    </section>
    <section id="explore-wall-tiles" class="container mx-auto p-8">
        <div class="flex flex-col md:flex-row bg-white shadow-lg rounded-lg overflow-hidden">
            <!-- Left Side -->
            <div class="md:w-1/2 w-full p-4 bg-blue-100">
                <div class="mt-4">
                    <h2 class="text-2xl font-bold">Explore Our Wall Tiles</h2>
                    <p class="text-gray-700 mt-2 mb-7">
                        Discover a variety of wall tiles to suit every room in your home. Our collection features high-quality tiles for bedrooms, bathrooms, kitchens, and living rooms.
                    </p>
                </div>
                <img src="img/walltiles.jpg" alt="Wall Tiles" class="w-full h-352 object-cover rounded-lg">
            </div>
            <!-- Right Side -->
            <div class="md:w-1/2 w-full p-4 grid grid-cols-1 sm:grid-cols-2 gap-4 bg-blue-100">
                <a href="bedroom-tile.php" class="block bg-white p-6 rounded-lg shadow hover:bg-gray-200">
                    <div class="h-32 overflow-hidden rounded-lg mb-4">
                        <img src="img/bedroom.png" alt="Bedroom Wall Tiles" class="w-auto h-full object-cover mx-auto">
                    </div>
                    <h3 class="text-xl font-bold">Bedroom Wall Tiles</h3>
                    <p class="text-gray-600 mt-2">Create a serene and stylish retreat with our bedroom wall tiles.</p>
                </a>
                <a href="bathroom-tile.php" class="block bg-white p-6 rounded-lg shadow hover:bg-gray-200">
                    <div class="h-32 overflow-hidden rounded-lg mb-4">
                        <img src="img/bathroom.png" alt="Bathroom Wall Tiles" class="w-auto h-full object-cover mx-auto">
                    </div>
                    <h3 class="text-xl font-bold">Bathroom Wall Tiles</h3>
                    <p class="text-gray-600 mt-2">Transform your bathroom into a spa-like sanctuary with our tiles.</p>
                </a>
                <a href="kitchen-tile.php" class="block bg-white p-6 rounded-lg shadow hover:bg-gray-200">
                    <div class="h-32 overflow-hidden rounded-lg mb-4">
                        <img src="img/kitchen.png" alt="Kitchen Wall Tiles" class="w-auto h-full object-cover mx-auto">
                    </div>
                    <h3 class="text-xl font-bold">Kitchen Wall Tiles</h3>
                    <p class="text-gray-600 mt-2">Enhance your cooking space with our stylish kitchen wall tiles.</p>
                </a>
                <a href="livingroom-tile.php" class="block bg-white p-6 rounded-lg shadow hover:bg-gray-200">
                    <div class="h-32 overflow-hidden rounded-lg mb-4">
                        <img src="img/livingroom.png" alt="Living Room Wall Tiles" class="w-auto h-full object-cover mx-auto">
                    </div>
                    <h3 class="text-xl font-bold">Living Room Wall Tiles</h3>
                    <p class="text-gray-600 mt-2">Add elegance and warmth to your living room with our wall tiles.</p>
                </a>
            </div>
        </div>
    </section>
    <section id="trending-products" class="container mx-auto p-8">
        <h2 class="text-3xl font-bold text-center mb-8 animate-fadeInUp">Trending Products</h2>
        <div class="flex flex-col md:flex-row justify-between items-center space-y-8 md:space-y-0 md:space-x-4 bg-blue-100">
            <!-- Product 1 -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden transform hover:scale-105 transition-transform duration-300 animate-fadeInUp">
                <img src="img/img-1.jpg" alt="Product 1" class="w-full h-full object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-bold mb-2">The ultima-4dx</h3>
                    <p class="text-gray-700 mb-4">This is a short description The ultima-4dx, highlighting its main features and benefits.</p>
                    <a href="#explore-product-1" class="text-blue-500 hover:underline">Explore Now</a>
                </div>
            </div>
            <!-- Product 2 -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden transform hover:scale-105 transition-transform duration-300 animate-fadeInUp">
                <img src="img/img-2.jpg" alt="Product 2" class="w-full h-full object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-bold mb-2">Gres tough</h3>
                    <p class="text-gray-700 mb-4">This is a short description of Gres tough, highlighting its main features and benefits.</p>
                    <a href="#explore-product-2" class="text-blue-500 hover:underline">Explore Now</a>
                </div>
            </div>
            <!-- Product 3 -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden transform hover:scale-105 transition-transform duration-300 animate-fadeInUp">
                <img src="img/img-3.jpg" alt="Product 3" class="w-full h-full object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-bold mb-2">Vitronite</h3>
                    <p class="text-gray-700 mb-4">This is a short description of Vitronite, highlighting its main features and benefits.</p>
                    <a href="#explore-product-3" class="text-blue-500 hover:underline">Explore Now</a>
                </div>
            </div>
        </div>
    </section>
    <!-- scroll Button -->
  
    <button id="scrollToTopButton" class="fixed bottom-4 right-4 bg-blue-500 text-white p-3 rounded-full shadow-lg hover:bg-blue-600 focus:outline-none">
        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path>
        </svg>
    </button>
    <?php include("header_and_footers/footer.php"); ?>

