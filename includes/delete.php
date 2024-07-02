<?php
include('dbh.inc.php');
?>

<?php
if (isset($_GET['blog_id'])) {
    # code...
    $id = $_GET['blog_id'];

    $query = "delete from blogs where blog_id = '$id'";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        # code...
       die("Failed to delete");
    }
    else{
        header("location:../index.php?delete_msg = You have Deleted Successfully");
}
}

?>