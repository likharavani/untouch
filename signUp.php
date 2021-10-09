<head>
    <meta charset="utf-8">
    <title>Sign in/ Sign up</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
    <!--boostrap css-->
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="assets/css/signUp.css">
</head>

<div class="container mt-5 rounded shadow" id="container">
    <div class="form-container sign-up-container mt-2">
        <form action="#">
            <h2 class="font-weight-bold">Create Account</h2>
            
            <div class="social-container">
                <a href="#" class="social"><i class="fab fa-facebook-square"></i></a>
                <a href="#" class="social"><i class="fab fa-linkedin"></i></a>
                <a href="#" class="social"><i class="fab fa-twitter-square"></i></a>
            </div>
            <span>or use your Account</span>
            <input type="text" placeholder="Name" />
            <input type="email" placeholder="Email" />
            <input type="password" placeholder="Password" />
            
            <button class="but">Sign up</button>
        </form>
    </div>

    <div class="form-container sign-in-container">
        <form action="#">
            <h2 class="font-weight-bold">Sign in with us!</h2>
            <div class="social-container">
                <a href="#" class="social"><i class="fab fa-facebook-square"></i></a>
                <a href="#" class="social"><i class="fab fa-linkedin"></i></a>
                <a href="#" class="social"><i class="fab fa-twitter-square"></i></a>
            </div>
            
            <span class="my-2">or use your email for Registration!</span>
            <input type="email" placeholder="Email" />
            <input type="password" placeholder="Password" />
            <a href="#" class="h6">Forgot Password?</a>
            <button class="but">Sign In</button>
        </form>
    </div>

    <div class="overlay-container">
        <div class="overlay">
            <div class="overlay-panel overlay-left">
                <h1 class="font-weight-bold">Welcome Back!<h1>
                        <p>To stay connected, please fill <br>the personal info!</p>
                        <button class="but" id="signIn">Sign In</button>
            </div>
            <div class="overlay-panel overlay-right">
                <h1 class="font-weight-bold">Hello, Friend!</h1>
                <p>Fill up Personal Information and <br> Start journey with us!</p>
                <button class="but" id="signUp">Sign Up</button>
            </div>
        </div>
    </div>
</div>


<script>
    const signUpButton = document.getElementById('signUp');
    const signInButton = document.getElementById('signIn');
    const container = document.getElementById('container');

    signUpButton.addEventListener('click', () => {
        container.classList.add('right-panel-active');
    });

    signInButton.addEventListener('click', () => {
        container.classList.remove('right-panel-active');
    });
</script>