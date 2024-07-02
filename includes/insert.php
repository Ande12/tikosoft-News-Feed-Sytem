<?php
include('dbh.inc.php')
?>

<?php
// checking if the form button add is clicked
if (isset($_POST["postBlog"])) {
    # code...
    // echo "Yess You just clicked";
    $username = $_POST["username"];
    $title = $_POST["title"];
    $content = $_POST["content"];

    // checking for validation
    if ($username == '' || empty($username)) {
        # code...
        // all of this will be displayed in the url using the key(location) and value(message) 
        header('location:../index.php?message=You need to fill in the First Name');
    } else {
        // inserting with the query method
        $query = "insert into blogs (username, title, content) values ('$username', '$title', '$content')";

        $result = mysqli_query($conn, $query);

        if (!$result) {
            # code...
            die("Query Failed to compile");
        } else {
            header("location: ../blog.php");
        }
    }

    // echo This is the validation;
}