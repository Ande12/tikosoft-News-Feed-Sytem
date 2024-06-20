<?php 
    include_once 'header.php';
?>


<?php
            if (isset($_SESSION["useruid"])) {
                echo "<H2 style ='color: #fff; margin: 100px;'>Hello there " . $_SESSION["useruid"]. "</H2>";
            }
            ?>

    <!-- popup forms starts -->
    <div class="blur-bg-overlay"></div>
    <div class="form-popup">

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