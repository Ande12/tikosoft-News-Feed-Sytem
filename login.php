
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
                <form action="includes/login.inc.php">
                    <div class="input-field">
                        <input type="text" name="email" required>
                        <label>Email/Full name</label>
                    </div>
                    <div class="input-field">
                        <input type="password" name="password" required>
                        <label>Password</label>
                    </div>
                    <a href="#" class="forgot-pass-link">Forgot password?</a>
                    <button type="submit" name="submit">Log In</button>
                </form>
                <div class="bottom-link">
                    Don't have an account?
                    <a href="#" id="signup-link">Signup</a>
                </div>
            </div>
        </div>
        <!-- signup form -->
  