<?php
include('dbh.inc.php')
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.css">
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>


    <?php
    if (isset($_GET['blog_id'])) {
        # code...
        $id = $_GET['blog_id'];
        // query
        $query = "select * from blogs where blog_id = '$id'";

        $result = mysqli_query($conn, $query);

        if (!$result) {
            # code...
            die("query Failed");
        } else {
            // echo "Success <br>";
            // print_r($result);

            // for the info to display
            $row = mysqli_fetch_assoc($result);
            // print_r($row);
        }
    }

    ?>

    <?php
    if (isset($_POST['update_user'])) {
        # code...

        if (isset($_GET['idNew'])) {
            # code...
            $idnew = $_GET['idNew'];
        }
        $newName = $_POST['username'];
        $newTitle = $_POST['title'];
        $newContent = $_POST['content'];


        $query = "update blogs set username = '$newName', title = '$newTitle', content = '$newContent' where blog_id = '$idnew'";

        $result = mysqli_query($connection, $query);

        if (!$result) {
            # code...
            die("query Failed");
        } else {
            header('location:../index.php?update_msg=You have successfully Updated Php');
        }
    }
    ?>



<div id="popForm"
            class="flex duration-200 absolute top-0 z-50 min-h-full flex-col bg-white sm:w-[100%] w-[90%] m-auto rounded-sm justify-center px-6 py-12 lg:px-8">
            <div class="sm:mx-auto sm:w-full sm:max-w-sm">
                <h2 class="mt-10 text-center md:text-4xl text-2xl font-bold leading-9 tracking-tight text-gray-900">Post your Blog
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
                            <label for="title"
                                class="block text-sm font-medium leading-6 text-gray-900">Title</label>
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
</body>

</html>