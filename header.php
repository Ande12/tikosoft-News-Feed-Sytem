<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News Feed Sytem</title>
    <link rel="stylesheet" href="./newsfeed/css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="./newsfeed/js/index.js"  defer></script>
</head>
<body>
    <!-- header -->


    <header class="bg-blue-400 w-full z-50 h-[15vh]">
    <nav class="navbar flex justify-between items-center px-4 py-2">
        <span class="hamburger-btn material-symbols-rounded text-white">menu</span>
        <a href="#" class="logo text-white text-2xl font-bold flex items-center">
            <i class="fas fa-newspaper mr-2"></i> NewsFeed
        </a>
        <ul class="links hidden md:flex space-x-4 text-white">
            <span class="close-btn material-symbols-rounded">close</span>
            <li><a href="index.php" class="hover:underline flex items-center"><i class="fas fa-home mr-1"></i> Home</a></li>
            <li><a href="comment.php" class="hover:underline flex items-center"><i class="fas fa-comments mr-1"></i> Comments</a></li>
            <li><a href="blog.php" class="hover:underline flex items-center"><i class="fas fa-blog mr-1"></i> Blogs</a></li>
        </ul>
        <?php
        if (isset($_SESSION["useruid"])) {
            echo "<button class='login-btn bg-red-500 hover:bg-red-600 text-white py-1 px-4 rounded flex items-center'><i class='fas fa-sign-out-alt mr-1'></i><a href='includes/logout.inc.php'>LOG OUT</a></button>";
        } else {
            echo "<button class='login-btn bg-green-500 hover:bg-green-600 text-white py-1 px-4 rounded flex items-center'><i class='fas fa-sign-in-alt mr-1'></i>LOG IN</button>";
        }
        ?>
    </nav>
</header>








