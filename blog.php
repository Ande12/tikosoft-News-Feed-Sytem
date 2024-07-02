<!-- section ends -->
<!-- <?php
include_once 'footer.php';
?> -->
<?php
include_once "includes/dbh.inc.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.css">
    <script src="./newsfeed/js/blog.js" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <header class="bg-blue-400 w-full z-50 h-[15vh]">
        <?php
        include_once 'header.php';
        ?>

        <?php
        if (isset($_SESSION["useruid"])) {
            // echo "<H2 style ='color: #fff; margin: 100px;'>Hello there blog " . $_SESSION["useruid"]. "</H2>";
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
    </header>
    <main>
        <div class="bg-white py-24 sm:py-32">
            <div class="mx-auto w-[90%] px-6 lg:px-8">
                <div class="mx-auto w-full lg:mx-0">
                    <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">From the blog</h2>
                    <div class=" block justify-between w-[90%] sm:flex">
                        <p class="mt-2 text-lg leading-8 text-gray-600">Learn how to grow your business with our expert
                            advice.</p>
                        <button id="displayFormBlog"
                            class="bg-blue-400 hover:bg-blue-300 text-white font-bold py-2 px-4 rounded">Post a
                            blog</button>
                    </div>

                </div>
                <div
                    class="mx-auto mt-10 w-full  gap-x-8 gap-y-16 border-t border-gray-200 pt-10 sm:mt-16 sm:pt-16 lg:mx-0">
                    <?php
                    // query
                    $query = "select * from blogs";

                    $result = mysqli_query($conn, $query);

                    if (!$result) {
                        # code...
                        die("query Failed");
                    } else {
                        // echo "Success <br>";
                        // print_r($result);
                    
                        // for the info to display
                        while ($row = mysqli_fetch_assoc($result)) { ?>
                            <article class=" items-start justify-between w-full border rounded-md p-5">
                                <div class="flex items-center gap-x-4 text-xs">
                                    <?php
                                    date_default_timezone_set('Africa/Douala'); // Set your timezone
                                    $currentDate = date('Y-m-d'); // Format for datetime attribute
                                    $displayDate = date('M d, Y'); // Format for display
                                    ?>

                                    <time datetime="<?php echo $currentDate; ?>"
                                        class="text-gray-500"><?php echo $displayDate; ?></time>

                                    <!-- <time datetime="2020-03-16" class="text-gray-500">Mar 16, 2020</time> -->
                                    <a href="#"
                                        class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">Marketing</a>
                                </div>
                                <div class="group relative">
                                    <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                                        <a href="#">
                                            <span class="absolute inset-0"></span>
                                            <?php echo $row['title'] ?>
                                        </a>
                                    </h3>
                                    <div class="block justify-between w-[90%] sm:flex">
                                        <p class=" mt-5 w-[70%] line-clamp-3 text-sm leading-6 text-gray-600">
                                            <?php echo $row['content'] ?>
                                        </p>
                                        <div class="sm:mt-10">
                                            <div class="flex justify-center overflow-hidden">
                                                <i class="fa-solid fa-user"></i>
                                                <i class="fa-solid fa-user"></i>


                                            </div>
                                            <p class="text-sm text-red-300">Comment <i
                                                    class="fa-solid text-sm fa-arrow-right"></i></p>
                                            <button class="text-green-500"><a class="text-green-500"
                                                    href="includes/delete.php?id=<?php echo $row["blog_id"] ?>">Edit</a></button>
                                            <a class="text-red-500"
                                                href="includes/delete.php?id=<?php echo $row["blog_id"] ?>">Delete</a>
                                        </div>

                                    </div>

                                </div>
                                <div class="relative mt-8 flex items-center gap-x-4">
                                    <i class="fa-solid fa-user"></i>
                                    <div class="text-sm leading-6">
                                        <p class="font-semibold text-gray-900">
                                            <a href="#">
                                                <span class="absolute inset-0"></span>
                                                <?php echo $row['username'] ?>
                                            </a>
                                        </p>
                                        <p class="text-gray-600">Co-Founder / CTO</p>
                                    </div>
                                </div>
                            </article>
                            <?php
                        }
                        ;
                    } ?>
                </div>
            </div>
        </div>

        <!-- Popup form -->
        <div id="popForm"
            class="flex duration-200 absolute top-0 z-50 min-h-full flex-col bg-white sm:w-[100%] w-[90%] m-auto rounded-sm justify-center px-6 py-12 lg:px-8">
            <div class="sm:mx-auto sm:w-full sm:max-w-sm">
                <h2 class="mt-10 text-center md:text-4xl text-2xl font-bold leading-9 tracking-tight text-gray-900">Post
                    your Blog
                </h2>
            </div>

            <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
                <form class="space-y-6" action="includes/insert.php" method="post">
                    <div>
                        <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Name</label>
                        <div class="mt-2">
                            <input id="username" name="username" type="username" autocomplete="username" required
                                class="block w-full outline-none p-4 rounded-md border-0 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-300 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div>
                        <div class="flex items-center justify-between">
                            <label for="title" class="block text-sm font-medium leading-6 text-gray-900">Title</label>
                        </div>
                        <div class="mt-2">
                            <input id="title" name="title" autocomplete="current-password" required
                                class="block w-full rounded-md border-0 outline-none p-4 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-300 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div>
                        <label for="content" class="block text-sm font-medium leading-6 text-gray-900">Content</label>
                        <div class="mt-2">
                            <textarea id="content" name="content" type="content" autocomplete="content" required
                                class="block w-full outline-none p-4 rounded-md border-0 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-300 sm:text-sm sm:leading-6"></textarea>
                        </div>
                    </div>

                    <div>
                        <button type="submit" name="postBlog"
                            class="flex w-full justify-center rounded-md bg-blue-500 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-blue-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Post
                            Blog</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>

</html>