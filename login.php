<?php 
    session_start();
    // Connect to the database
    $servername = "localhost";
    $username = "ank";
    $password = "abcd1234";
    $dbname = "food_bridge";

    $conn = new mysqli($servername, $username, $password, $dbname);
    $loginStatus = false;
    $showErrorAlert = false;
    $_SESSION["isAdmin"] = false;
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the form data
        $username = $_POST["username"];
        $password = $_POST["password"];
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $sql = "SELECT * FROM users WHERE username='$username'";
        $result = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($result);

        if ($num == 1) {
            while($row = mysqli_fetch_assoc($result)){
                if (password_verify($password, $row['password'])){
                    $loginStatus = true;
                    $_SESSION['loggedIn'] = true;
                    $_SESSION['username'] = $username;

                    if($row['user_type'] == 'admin'){
                        $_SESSION['isAdmin'] = true;
                    }
                    header('location: homeLoggedIn.php');
                } else {
                    $showErrorAlert = "Invalid Credentials";
                }
            }
        } else {
            $showErrorAlert = "Invalid Credentials";
        }
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and registration page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="ankstyle.css">
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>



<body style="display: flex; flex-direction: column; align-items: center;">
    <?php 
        if(isset($_SESSION['success_message'])){
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Registration Successful</strong> '. $_SESSION['success_message'] .'
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
            }
            unset($_SESSION['success_message']);
    ?>
    <?php 
        if($loginStatus){
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>You are logged in!</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
            }
    ?>
    <?php 
        if($showErrorAlert){
                echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong> '. $showErrorAlert .'</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
            }
    ?>
    <div class="wrapper">
        <div class="form-box login" id="loginForm">
            <h2>Login</h2>
            <form action="login.php" method="POST">
                <div class="input-box">
                    <span class="icon"><i class="fa-solid fa-envelope"></i></span>
                    <input id="email" type="text" name="username" required >
                    <label >Username</label> 
                </div>
                <div class="input-box">
                    <span class="icon"><i id="passwordIcon" class="fa-solid fa-lock"></i></span>
                    <input id="password" type="password" name="password" required>
                    <label>Password</label>
                </div>
                <div class="remember-forgot">
                    <!-- <label><input type="checkbox">Remember me</label> -->
                    <!-- <a href="#">Forgot Password?</a> -->
                </div>
                <button type="submit" class="bttn">Login</button>
                
                <div class="login-register">
                    <p>Don't have an account? <a href="signUp.php" class="register-link">Sign Up</a></p>
                </div>
            </form>
        </div>
    </div>

     <script src="loginScript.js"></script>
           <!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>  
</body>
</html>