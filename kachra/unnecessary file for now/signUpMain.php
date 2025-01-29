<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and registration page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <!-- <link rel="stylesheet" href="./partials/nav.css"> -->
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">



</head>



<body style="display: flex; flex-direction: column; align-items: center;">
    <?php 
        if($showSuccessAlert == true){
            echo '    <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Registration Successful</strong> Your account has been created.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        }
    ?>

    <div class="wrapper active">

        <div class="form-box register">
            <h2>Sign Up</h2>
            <form action="signup.php" method="POST">
                <div class="input-box">
                    <span class="icon"><i class="fa-solid fa-user"></i></span>
                    <input type="text" name="username" required >
                    <label>Username</label> 
                </div>
                <div class="input-box">
                    <span class="icon"><i class="fa-solid fa-envelope"></i></span>
                    <input type="email" name="email" required >
                    <label>Email</label> 
                </div>
                <div class="input-box">
                    <span class="icon"><i class="fa-solid fa-lock"></i></span>
                    <input type="password" name="password" required >
                    <label>Password</label>
                </div>
                <div class="input-box">
                    <span class="icon"><i class="fa-solid fa-lock"></i></span>
                    <input type="password" name="confirmPassword" required >
                    <label>Confirm Password</label>
                </div>
                <br>
                <div class="remember-forgot">
                    <label><input type="checkbox">I agree to the terms and conditions</label>
                </div>
                <button type="submit" class="bttn">Sign Up</button>
                
                <div class="login-register">
                    <p>Already have an account? <a href="login.html" class="login-link">Login</a></p>
                </div>
            </form>
        </div>
    </div>

     <script src="script.js"></script>
     <!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- <script src="./partials/nav.js"> </script> -->
</body>
</html>