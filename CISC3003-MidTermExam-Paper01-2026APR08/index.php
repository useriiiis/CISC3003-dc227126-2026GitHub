<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dc227126 SI TIN IEK</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
    <div class="container" id="container">
        <!-- Sign Up Form -->
        <div class="form-container sign-up-container">
            <form action="#">
                <h1>Join Us</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>Use your email to sign up</span>
                <input type="text" name="fullname" placeholder="Full Name" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Create Password" required>
                <button type="submit">REGISTER</button>
            </form>
        </div>

        <!-- Sign In Form -->
        <div class="form-container sign-in-container">
            <form action="#">
                <h1>Log In</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>Use your account to sign in</span>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <a href="#" class="forgot">Forgot Password?</a>
                <button type="submit">SIGN IN</button>
            </form>
        </div>

        <!-- Overlay -->
        <div class="overlay-container">
            <div class="overlay">
                <!-- Overlay Left Panel (shown when Sign Up is active) -->
                <div class="overlay-panel overlay-left">
                    <h1>Hello, Again!</h1>
                    <img src="images/login-avatar.png" alt="Login Avatar" class="overlay-img" onerror="this.style.display='none'">
                    <p>Log in to stay connected with us</p>
                    <button class="ghost" id="signIn">SIGN IN</button>
                </div>
                <!-- Overlay Right Panel (shown when Sign In is active) -->
                <div class="overlay-panel overlay-right">
                    <h1>Welcome!</h1>
                    <img src="images/signup-envelope.png" alt="Signup Envelope" class="overlay-img" onerror="this.style.display='none'">
                    <p>Enter your details to start your journey</p>
                    <button class="ghost" id="signUp">SIGN UP</button>
                </div>
            </div>
        </div>
    </div>

    <footer>
        CISC3003 Web Programming: dc227126 SI TIN IEK 2026
    </footer>

    <script src="js/script.js"></script>
</body>
</html>
