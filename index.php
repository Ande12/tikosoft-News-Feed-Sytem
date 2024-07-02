<?php 
    include_once 'header.php';
?>  

<section class="flex flex-col items-center justify-center bg-white h-dvh text-gray-800 p-8">
    <div class="max-w-2xl text-center bg-white p-6 rounded-lg shadow-lg">
        <h1 class="text-5xl font-extrabold mb-4">Welcome to NewsFeed</h1>
        <p class="text-lg mb-8">
            Stay updated with the latest news articles and blogs from around the world. Get started by exploring our featured content.
        </p>
        <a href="blog.php" class="bg-blue-400 hover:bg-blue-500 text-white font-semibold py-2 px-4 rounded-lg transition duration-300 shadow-lg">
            Get Started
        </a>
    </div>
</section>

<!-- Optional: Add some icons and illustrations -->
<section class="bg-gray-100 py-12">
    <div class="container mx-auto px-6 text-gray-800">
        <div class="flex flex-wrap">
            <div class="w-full md:w-1/3 px-4 py-2">
                <div class="text-center">
                    <svg class="w-16 h-16 mx-auto mb-4 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m6 0h1v-4h1M3 7h1V4h1m0 12h1v-3h1m12 3h1v-3h1M7 16h1v-3h1M4 7V4h1V3m16 3v1h-1v1m-6 0v-3h-1V4H7v1h6v4h1m0-4h1v3m-4 4h1v-4h1v-1h1m-7 4h1v-4H5v4h1zm9 4h1v-1h1v1h1v1m-4 0h-1v1h-1v-1h-1"></path>
                    </svg>
                    <h3 class="text-xl font-bold mb-2">Latest News</h3>
                    <p>Get the most recent updates on global events.</p>
                </div>
            </div>
            <div class="w-full md:w-1/3 px-4 py-2">
                <div class="text-center">
                    <svg class="w-16 h-16 mx-auto mb-4 text-purple-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 21v-7a2 2 0 00-2-2h-6a2 2 0 00-2 2v7m-6 0v-7a2 2 0 012-2h6m8 0h1a2 2 0 002-2v-5a2 2 0 00-2-2h-2V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v1h-6a2 2 0 00-2 2v5a2 2 0 002 2h1"></path>
                    </svg>
                    <h3 class="text-xl font-bold mb-2">In-Depth Articles</h3>
                    <p>Read comprehensive articles on a variety of topics.</p>
                </div>
            </div>
            <div class="w-full md:w-1/3 px-4 py-2">
                <div class="text-center">
                    <svg class="w-16 h-16 mx-auto mb-4 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 11V9a5 5 0 0110 0v2a5 5 0 01-10 0zm8 4h2v4h-2zm-2 0v4m-4-4h2v4H8z"></path>
                    </svg>
                    <h3 class="text-xl font-bold mb-2">Engaging Blogs</h3>
                    <p>Discover blogs written by our talented authors.</p>
                </div>
            </div>
        </div>
    </div>
</section>


<?php
            if (isset($_SESSION["useruid"])) {
                echo "<H2 style ='color: #fff; margin: 100px;'>Hello there " . $_SESSION["useruid"]. "</H2>";
            }
            ?>

    <!-- popup forms starts -->
    <div class="blur-bg-overlay"></div>
    <div class="form-popup rounded-md">

        <span class="close-btn material-symbols-rounded">close</span>
        <!-- login form -->
        <?php 
        include_once 'login.php';
        ?>

        <!-- signup form -->
        <?php 
        include_once 'signup.php';
        ?>
     
    </div>

<!-- section ends -->
<!-- <?php 
    include_once 'footer.php';
?> -->