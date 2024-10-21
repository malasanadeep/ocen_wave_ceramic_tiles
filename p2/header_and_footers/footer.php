<!-- Footer Section -->
<footer class="bg-gray-800 text-white py-8 animate-fadeIn ">
    <div class="container mx-auto px-4">
        <div class="flex flex-col md:flex-row justify-between items-start space-y-8 md:space-y-0 md:space-x-8">
            <!-- Vertically Aligned Navbar -->
            <div>
                <h3 class="text-xl font-bold mb-4">Navigation</h3>
                <nav class="flex flex-col space-y-2">
                    <a href="#" class="hover:text-gray-400 hover:animate-textPop">Home</a>
                    <a href="about.php" class="hover:text-gray-400 hover:animate-textPop">Company</a>
                    <a href="#" class="hover:text-gray-400 hover:animate-textPop">Export</a>
                    <a href="#" class="hover:text-gray-400 hover:animate-textPop">Products</a>
                    <a href="contact.php" class="hover:text-gray-400 hover:animate-textPop">Contact Us</a>
                    <a href="#" class="hover:text-gray-400 hover:animate-textPop">Booking</a>
                    <!-- <a href="login.php" class="hover:text-gray-400 hover:animate-textPop">Log In</a> -->
                    <!--  -->
                    <!-- if (isset($_SESSION['is_user']) == true) {
                        echo '<a href="logout.php" class="hover:text-gray-400 hover:animate-textPop">Log out</a>';
                    } else {
                        echo '<a href="login.php" class="hover:text-gray-400 hover:animate-textPop">Log In</a>';
                    }
                    ?> -->
                </nav>
            </div>
            <!-- Address -->
            <div>
                <h3 class="text-xl font-bold mb-4">Address</h3>
                <address class="not-italic">
                    421 Tile Street<br>
                    Ceramic City,Morbi 363641<br>
                    india
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
                    <a href="#" class="hover:text-gray-400 hover:animate-textPop"><i class="fab fa-instagram"></i>
                        Instagram</a>
                </div>
            </div>
            <!-- Products -->
            <div>
               
                <h3 class="text-xl font-bold mb-4">Products</h3>
                <nav class="flex flex-col space-y-2">
                    <a href="product.php" class="hover:text-gray-400 hover:animate-textPop">Bed Room Tiles</a>
                    <a href="product.php" class="hover:text-gray-400 hover:animate-textPop">Bath Room Tiles</a>
                    <a href="product.php" class="hover:text-gray-400 hover:animate-textPop">Living Room
                        Tiles</a>
                    <a href="product.php" class="hover:text-gray-400 hover:animate-textPop">Kitchen Tiles</a>
                    <a href="product.php" class="hover:text-gray-400 hover:animate-textPop">Poster Tiles</a>
                </nav>
            </div>
            <!-- Contact Information -->
            <div>
                <h3 class="text-xl font-bold mb-4">Contact</h3>
                <p>Email: <a href="mailto:oceanwave@gmail.com"
                        class="hover:text-gray-400 hover:animate-textPop">oceanwave@gmail.com</a></p>
                <p>Phone: <a href="#" class="hover:text-gray-400 hover:animate-textPop">+91 8866155650</a></p>
                <p>Mobile: <a href="#" class="hover:text-gray-400 hover:animate-textPop">+91 6352635638</a></p>
            </div>
        </div>
        <!-- Copyright Notice -->
        <div class="mt-8 text-center text-gray-500">
            &copy; 2024 Ocean Waves Tiles Inc. All rights reserved.
        </div>
    </div>
    <button id="whatsappButton"
        class="fixed bottom-20 right-4 bg-green-500 text-white p-3 rounded-full shadow-lg hover:bg-green-600 focus:outline-none">
        <!-- <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"
            xmlns="https://commons.wikimedia.org/wiki/File:WhatsApp.svg">
            <path
                d="M12 0C5.373 0 0 5.373 0 12c0 2.25.617 4.359 1.693 6.197L0 24l5.938-1.572A11.959 11.959 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm1.736 17.748c-1.735 0-3.47-.58-4.84-1.742l-3.577 1.19 1.19-3.577a8.426 8.426 0 01-1.742-4.84c0-4.635 3.798-8.433 8.433-8.433 4.635 0 8.433 3.798 8.433 8.433 0 4.635-3.798 8.433-8.433 8.433z">
            </path>
            <path
                d="M17.62 14.63c-.213-.106-1.25-.618-1.44-.693-.19-.075-.33-.106-.472.106-.142.213-.545.693-.668.834-.123.142-.246.16-.459.053-.213-.106-.898-.33-1.71-1.054-.63-.558-1.054-1.25-1.18-1.463-.123-.213-.013-.33.093-.435.096-.096.213-.246.318-.37.106-.123.142-.213.213-.33.07-.106.035-.266-.017-.37-.053-.106-.472-1.178-.646-1.613-.17-.428-.344-.37-.472-.37-.13 0-.266-.017-.4-.017s-.37.053-.566.266c-.2.213-.745.747-.745 1.824s.763 2.106.87 2.253c.106.142 1.503 2.313 3.648 3.243.51.22.91.35 1.22.447.513.16.98.138 1.35.084.41-.06 1.25-.513 1.427-1.01.176-.497.176-.92.123-1.01-.053-.09-.2-.143-.415-.25z">
            </path>
        </svg> -->
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
  <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
</svg>
    </button>
</footer>
<script>document.addEventListener('DOMContentLoaded', function () {
        const menuButton = document.getElementById('menu-button');
        const mobileMenu = document.getElementById('mobile-menu');

        menuButton.addEventListener('click', function () {
            mobileMenu.classList.toggle('hidden');
        });
    });
    let scrollIndex = 0;
    document.addEventListener('DOMContentLoaded', function () {
        const prevButton = document.querySelector('.prev');
        const nextButton = document.querySelector('.next');
        const sliderContainer = document.querySelector('.slider-container');
        const slides = document.querySelectorAll('.slider-slide');
        let index = 0;

        function showSlide(n) {
            if (n >= slides.length) index = 0;
            if (n < 0) index = slides.length - 1;
            sliderContainer.style.transform = `translateX(${-index * 100}%)`;
        }

        function nextSlide() {
            index++;
            showSlide(index);
        }

        function prevSlide() {
            index--;
            showSlide(index);
        }

        nextButton.addEventListener('click', nextSlide);
        prevButton.addEventListener('click', prevSlide);

        // Auto-slide every 5 seconds
        setInterval(nextSlide, 5000);
    });
    document.querySelector('.menu-toggle').addEventListener('click', () => {
        document.querySelector('.nav-links').classList.toggle('active');
    });

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
<script>
    const whatsappButton = document.getElementById('whatsappButton');

    // Function to open WhatsApp API URL in a new tab
    whatsappButton.addEventListener('click', () => {
        const phone = "918866155650"; // Replace with your desired phone number
        const message = "Hello, I have an inquiry."; // Replace with your custom message
        const whatsappUrl = `https://api.whatsapp.com/send?phone=${phone}&text=${encodeURIComponent(message)}`;
        window.open(whatsappUrl, '_blank');
    });
</script>

</body>

</html>