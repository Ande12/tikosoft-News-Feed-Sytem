<?php 
    include_once 'header.php';
?>  


<section class="flex flex-col items-center justify-center bg-white h-dvh text-gray-800 p-8">
    <div class="max-w-2xl text-center bg-white p-6 rounded-lg shadow-lg">
        <?php
        if (isset($_SESSION["useruid"])) {
            echo "<h2 class='text-5xl font-extrabold mb-4'>Welcome " . $_SESSION["useruid"]. "</h2>";
        } else {
            echo "<h1 class='text-5xl font-extrabold mb-4'>Welcome to NewsFeed</h1>";
        }
        ?>
        <p class="text-lg mb-8">
            Stay updated with the latest news articles and blogs from around the world. Get started by exploring our featured content.
        </p>
        <a href="blog.php" class="bg-blue-400 hover:bg-blue-500 text-white font-semibold py-2 px-4 rounded-lg transition duration-300 shadow-lg flex items-center justify-center">
            <i class="fas fa-arrow-right mr-2"></i> Get Started
        </a>
    </div>
</section>

<!-- Optional: Add some icons and illustrations -->
<section class="bg-gray-100 py-12">
    <div class="container mx-auto px-6 text-gray-800">
        <div class="flex flex-wrap">
            <div class="w-full md:w-1/3 px-4 py-2">
                <div class="text-center">
                    <i class="fas fa-globe w-16 h-16 mx-auto mb-4 text-blue-500"></i>
                    <h3 class="text-xl font-bold mb-2">Latest News</h3>
                    <p>Get the most recent updates on global events.</p>
                </div>
            </div>
            <div class="w-full md:w-1/3 px-4 py-2">
                <div class="text-center">
                    <i class="fas fa-book-open w-16 h-16 mx-auto mb-4 text-purple-500"></i>
                    <h3 class="text-xl font-bold mb-2">In-Depth Articles</h3>
                    <p>Read comprehensive articles on a variety of topics.</p>
                </div>
            </div>
            <div class="w-full md:w-1/3 px-4 py-2">
                <div class="text-center">
                    <i class="fas fa-pen-nib w-16 h-16 mx-auto mb-4 text-green-500"></i>
                    <h3 class="text-xl font-bold mb-2">Engaging Blogs</h3>
                    <p>Discover blogs written by our talented authors.</p>
                </div>
            </div>
        </div>
    </div>
</section>






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
<?php 
    include_once 'footer.php';
?>