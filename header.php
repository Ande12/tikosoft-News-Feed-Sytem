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
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="./newsfeed/js/index.js"  defer></script>
</head>
<body>
    <!-- header -->
    <header class="bg-blue-400 w-full z-50 h-[15vh]">
        <nav class="navbar">
            <span class="hamburger-btn material-symbols-rounded">menu</span>
            <a href="#" class="logo">
                <h2>NewsFeed</h2>
            </a>
            <ul class="links">
                <span class="close-btn material-symbols-rounded">close</span>
                <li><a href="index.php">Home</a></li>
                <!-- <li><a href="#">About us</a></li> -->
                <li><a href="comment.php">Articles</a></li>
                <li><a href="blog.php">Blogs</a></li>
                <!-- <li><a href="#">Contact us</a></li> -->
            </ul>
            <?php
            if (isset($_SESSION["useruid"])) {
                echo "<button class='login-btn'><a class='' href = 'includes/logout.inc.php'>LOG OUT</a></button>";
            }
            else {
                echo "<button class='login-btn'>LOG IN</button>";
            }
            ?>
           
        </nav>
    </header>








