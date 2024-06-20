
        <!-- login form -->
        <div class="form-box login">
            <!-- leftside login form -->
            <div class="form-details">
                <h2>Welcome Back</h2>
                <p>Please log in using your personal information to stay connected with us.</p>
            </div>
            <!-- rightside login form  -->
            <div class="form-content">
                <h2>LOG IN</h2>
                <form action="includes/login.inc.php" method="post">
                    <div class="input-field">
                        <input type="text" name="uid" required>
                        <label>Email/Full name</label>
                    </div>
                    <div class="input-field">
                        <input type="password" name="pwd" required>
                        <label>Password</label>
                    </div>
                    <a href="#" class="forgot-pass-link">Forgot password?</a>
                    <button type="submit" name="submit">Log In</button>
                </form>
                <div class="bottom-link">
                    Don't have an account?
                    <a href="#" id="signup-link">Signup</a>
                </div>
                <?php
    // check if a url exist in a url - Post(data in url we can see), Get(data inside url we can see)
    if(isset($_GET["error"])) {
        if($_GET["error"] == "emptyinput") {
            echo "<p>Fill in all fields!</p>";
        } 
        else if ($_GET["error"] == "wronglogin") {
            echo "<p>Incorrect login information!</p>";
        }
    }
?>
            </div>
        </div>
        <!-- signup form -->
        
