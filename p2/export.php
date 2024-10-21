<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ocean Wave Ceramic</title>
  <link rel="icon" href="img/abstract-circle-wave-logo-png-image-11.png" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <style>
     .hover-icon {
            transition: transform 0.3s;
        }
        .hover-icon:hover {
            transform: scale(1.2);
        }
        .fade-in {
            animation: fadeIn 1s ease-in-out;
        }
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
        .count-up {
            font-size: 2.5rem;
            font-weight: bold;
            color: #ef4444;
        }
           /* Animation for table rows */
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
        .animated-row {
            animation: fadeInUp 0.5s ease-in-out;
        }
  </style>
</head>
<body>
<?php include("header_and_footers/header.php"); ?>
<section class="flex flex-col md:flex-row items-center justify-center w-full h-screen bg-white">
        <div class="flex-1 p-5 md:p-16">
            <h2 class="text-red-500 text-xl md:text-2xl font-semibold mb-4">Our Export</h2>
            <h1 class="text-black text-3xl md:text-5xl font-bold mb-6">Ceramic Tiles Exporter in India.</h1>
            <p class="text-gray-700 text-lg md:text-xl mb-6">
                More than 74% of production is exported to more than 18 countries.
                <br>
                The world's progressive countries have accepted our products.
            </p>
            <a href="contact.php" class="inline-block bg-black text-white text-lg md:text-xl py-3 px-6 rounded hover:bg-gray-800 transition">
                Contact us
            </a>
        </div>
        <div class="flex-1 w-full h-64 md:h-full">
            <img src="img/export-img.png" alt="Export Image" class="w-60vh h-60vh object-cover mt-5">
        </div>
    </section>
     <!-- Three Component Section -->
     <section class="bg-white py-5  fade-in">
        <div class="container mx-auto px-4">
            <div class="text-center mb-8">
                <h2 class="text-3xl font-bold">Our Commitment</h2>
            </div>
            <div class="flex flex-col md:flex-row justify-around items-center">
                <div class="flex flex-col items-center mb-8 md:mb-0">
                    <i class="fas fa-star text-5xl mb-4 hover-icon"></i>
                    <h3 class="text-xl font-semibold mb-2">QUALITY CONTROL</h3>
                    <p class="text-center max-w-xs">Something we never compromise for quality, we are committed to quality and fulfilling clients' desires.</p>
                </div>
                <div class="flex flex-col items-center mb-8 md:mb-0">
                    <i class="fas fa-leaf text-5xl mb-4 hover-icon"></i>
                    <h3 class="text-xl font-semibold mb-2">ECO-FRIENDLY</h3>
                    <p class="text-center max-w-xs">We respect people and the environment, maintaining a veritable work philosophy as a core value.</p>
                </div>
                <div class="flex flex-col items-center">
                    <i class="fas fa-life-ring text-5xl mb-4 hover-icon"></i>
                    <h3 class="text-xl font-semibold mb-2">24/7 CUSTOMER SUPPORT</h3>
                    <p class="text-center max-w-xs">Whenever and wherever you need our support, you can contact our 24/7 customer support team.</p>
                </div>
            </div>
        </div>
    </section>
     <!-- Statistics Section -->
     <section id="statistics-section" class="py-12 bg-white mt-5">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold">We create <span class="text-black">the material</span> <span class="text-red-500">you need.</span></h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 text-center">
                <div class="flex flex-col items-center">
                    <span class="count-up" data-target="18">0</span>
                    <p class="text-xl font-medium">Exporting Country</p>
                </div>
                <div class="flex flex-col items-center">
                    <span class="count-up" data-target="250">0</span>
                    <p class="text-xl font-medium">Authorized Dealers</p>
                </div>
                <div class="flex flex-col items-center">
                    <span class="count-up" data-target="360">0</span>
                    <p class="text-xl font-medium">Tiles Design</p>
                </div>
                <div class="flex flex-col items-center">
                    <span class="count-up" data-target="2450">0</span>
                    <p class="text-xl font-medium">Satisfied Customers</p>
                </div>
            </div>
        </div>
    </section>

     <!-- Export Pallets Packing Details Section -->
     <section class="py-12 px-3">
        <div class="container mx-auto px-4">
            <div class="text-center mb-8">
                <h2 class="text-3xl font-bold">Export Pallets Packing Details</h2>
            </div>
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white border border-gray-300">
                    <thead>
                        <tr class="bg-gray-800 text-white">
                            <th class="py-3 px-4 border-b border-gray-300">Tiles Size</th>
                            <th class="py-3 px-4 border-b border-gray-300">Area Converage/box(sqm)</th>
                            <th class="py-3 px-4 border-b border-gray-300">Packing/Box</th>
                            <th class="py-3 px-4 border-b border-gray-300">Boxes/Pallet</th>
                            <th class="py-3 px-4 border-b border-gray-300">Pallet/Container</th>
                            <th class="py-3 px-4 border-b border-gray-300">Boxes/Container</th>
                            <th class="py-3 px-4 border-b border-gray-300">sqm/Container</th>
                            <th class="py-3 px-4 border-b border-gray-300">Weight/Box</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="animated-row bg-white hover:bg-gray-100">
                            <td class="py-3 px-4 border-b border-gray-300">60x60 CM</td>
                            <td class="py-3 px-4 border-b border-gray-300"> 1.44</td>
                            <td class="py-3 px-4 border-b border-gray-300">4 Pcs</td>
                            <td class="py-3 px-4 border-b border-gray-300">40</td>
                            <td class="py-3 px-4 border-b border-gray-300">25</td>
                            <td class="py-3 px-4 border-b border-gray-300">1000</td>
                            <td class="py-3 px-4 border-b border-gray-300">1440</td>
                            <td class="py-3 px-4 border-b border-gray-300">27 Kg (Approx.)</td>
                        </tr>
                        <tr class="animated-row bg-gray-50 hover:bg-gray-100">
                            <td class="py-3 px-4 border-b border-gray-300">60x120 CM</td>
                            <td class="py-3 px-4 border-b border-gray-300">1.44</td>
                            <td class="py-3 px-4 border-b border-gray-300">2 Pcs</td>
                            <td class="py-3 px-4 border-b border-gray-300">72 / 30</td>
                            <td class="py-3 px-4 border-b border-gray-300">10 / 8</td>
                            <td class="py-3 px-4 border-b border-gray-300">960</td>
                            <td class="py-3 px-4 border-b border-gray-300">1382.4</td>
                            <td class="py-3 px-4 border-b border-gray-300">29 Kg (Approx.)</td>
                        </tr>
                        <tr class="animated-row bg-white hover:bg-gray-100">
                            <td class="py-3 px-4 border-b border-gray-300">19.5x120 CM</td>
                            <td class="py-3 px-4 border-b border-gray-300"> 1.44</td>
                            <td class="py-3 px-4 border-b border-gray-300">6 Pcs</td>
                            <td class="py-3 px-4 border-b border-gray-300">36</td>
                            <td class="py-3 px-4 border-b border-gray-300">27</td>
                            <td class="py-3 px-4 border-b border-gray-300">972</td>
                            <td class="py-3 px-4 border-b border-gray-300">1399.68</td>
                            <td class="py-3 px-4 border-b border-gray-300">28.5 Kg (Approx.)</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <button id="scrollToTopButton" class="fixed bottom-4 right-4 bg-blue-500 text-white p-3 rounded-full shadow-lg hover:bg-blue-600 focus:outline-none">
        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path>
        </svg>
    </button>
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
                    <a href="#" class="hover:text-gray-400 hover:animate-textPop">Products</a>
                    <a href="contact.php" class="hover:text-gray-400 hover:animate-textPop">Contact Us</a>
                    <a href="#" class="hover:text-gray-400 hover:animate-textPop">Booking</a>
                    <!-- <a href="login.php" class="hover:text-gray-400 hover:animate-textPop">Log In</a> -->
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
                    <a href="#" class="hover:text-gray-400 hover:animate-textPop"><i class="fab fa-facebook"></i> Facebook</a>
                    <a href="#" class="hover:text-gray-400 hover:animate-textPop"><i class="fab fa-twitter"></i> Twitter</a>
                    <a href="https://www.instagram.com/deep_malasana_26/" class="hover:text-gray-400 hover:animate-textPop"><i class="fab fa-instagram"></i> Instagram</a>
                </div>
            </div>
            <!-- Products -->
            <div>
                <h3 class="text-xl font-bold mb-4">Products</h3>
                <nav class="flex flex-col space-y-2">
                <a href="bedroom-tile.php" class="hover:text-gray-400 hover:animate-textPop">Bed Room Tiles</a>
                    <a href="bathroom-tile.php" class="hover:text-gray-400 hover:animate-textPop">Bath Room Tiles</a>
                    <a href="livingroom-tile.php" class="hover:text-gray-400 hover:animate-textPop">Living Room Tiles</a>
                    <a href="kitchen-tile.php" class="hover:text-gray-400 hover:animate-textPop">Kitchen Tiles</a>
                    <a href="poster-tile.php" class="hover:text-gray-400 hover:animate-textPop">Poster Tiles</a>
                </nav>
            </div>
            <!-- Contact Information -->
            <div>
                <h3 class="text-xl font-bold mb-4">Contact</h3>
                <p>Email: <a href="mailto:oceanwave.com" class="hover:text-gray-400 hover:animate-textPop">oceanwave@gmail.com</a></p>
                <p>Phone: <a href="tel:+1234567890" class="hover:text-gray-400 hover:animate-textPop">+91 8866155650</a></p>
                <p>Phone: <a href="tel:+1234567890" class="hover:text-gray-400 hover:animate-textPop">+91 6352635638</a></p>
            </div>
        </div>
        <!-- Copyright Notice -->
        <div class="mt-8 text-center text-gray-500">
            &copy; 2024 Ocean Waves Tiles Inc. All rights reserved.
        </div>
    </div>
</footer>
<script >document.addEventListener('DOMContentLoaded', function() {
  const menuButton = document.getElementById('menu-button');
  const mobileMenu = document.getElementById('mobile-menu');

  menuButton.addEventListener('click', function() {
      mobileMenu.classList.toggle('hidden');
  });
});
   // Function to animate the numbers
   const animateNumbers = (entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const counters = entry.target.querySelectorAll('.count-up');
                    counters.forEach(counter => {
                        const updateCount = () => {
                            const target = +counter.getAttribute('data-target');
                            const count = +counter.innerText;
                            const increment = target / 200; // Adjust the increment for speed
                            if (count < target) {
                                counter.innerText = Math.ceil(count + increment);
                                setTimeout(updateCount, 20); // Adjust the timeout for speed
                            } else {
                                counter.innerText = target;
                            }
                        };
                        updateCount();
                    });
                    observer.unobserve(entry.target); // Stop observing once animated
                }
            });
        };

        // Create an Intersection Observer
        const observer = new IntersectionObserver(animateNumbers, {
            threshold: 0.1 // Trigger when 10% of the section is in view
        });

        // Observe the statistics section
        observer.observe(document.getElementById('statistics-section'));
        //  // Intersection Observer to trigger animations when the table section is in view
        //  const tableRows = document.querySelectorAll('.animated-row');
        // const observerOptions = {
        //     root: null,
        //     rootMargin: '0px',
        //     threshold: 0.1
        // };

        // const observerCallback = (entries, observer) => {
        //     entries.forEach(entry => {
        //         if (entry.isIntersecting) {
        //             entry.target.classList.add('animate-fadeInUp');
        //             observer.unobserve(entry.target);
        //         }
        //     });
        // };

        // const observer = new IntersectionObserver(observerCallback, observerOptions);
        // tableRows.forEach(row => observer.observe(row));
</script>
<script>
        const scrollToTopButton = document.getElementById('scrollToTopButton');

        // Scroll to the top of the page when the button is clicked
        scrollToTopButton.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });

        // Show or hide the button based on scroll position
        window.addEventListener('scroll', () => {
            if (window.scrollY > 200) {
                scrollToTopButton.classList.remove('hidden');
            } else {
                scrollToTopButton.classList.add('hidden');
            }
        });

        // Initially hide the button
        scrollToTopButton.classList.add('hidden');
    </script>

</body>
</html>