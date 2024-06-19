
        <!-- signup form -->
        <div class="form-box signup">
            <!-- leftside signup form -->
            <div class="form-details">
                <h2>Create Account</h2>
                <p>To become a part of our community, please sign up using your personal information.</p>
            </div>
            <!-- right side sign up form -->
            <div class="form-content">
                <h2>SIGN UP</h2>
                <form action="includes/signup.inc.php" method="post">
                    <div class="input-field">
                        <input type="text" name="name" required>
                        <label>Enter your full name</label>
                    </div>
                    <div class="input-field">
                        <input type="text" name="uid" required>
                        <label>Enter your username</label>
                    </div>
                    <div class="input-field">
                        <input type="text" name="email" required>
                        <label>Enter your email</label>
                    </div>
                    <div class="input-field">
                        <input type="password" name = "pwd" required>
                        <label>Create password</label>
                    </div>
                    <div class="input-field">
                        <input type="password" name = "pwdrepeat" required>
                        <label>Confirm password</label>
                    </div>
                    <div class="policy-text">
                        <input type="checkbox" name="terms" id="policy">
                        <label for="policy">
                            I agree to the
                            <a href="#" class="option">Terms & Conditions</a>
                        </label>
                    </div>
                    <button type="submit" name="submit">Sign Up</button>
                </form>
                <div class="bottom-link">
                    Already have an account? 
                    <a href="#" id="login-link">Login</a>
                </div>
            </div>
        </div>
  