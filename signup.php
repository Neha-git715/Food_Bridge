<?php
session_start();
// Connect to the database
$servername = "localhost";
$username = "ank";
$password = "abcd1234";
$dbname = "food_bridge";

$conn = new mysqli($servername, $username, $password, $dbname);
$showErrorAlert = false;
$showSuccessAlert = false;
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirmPassword"];
    // Hash the password for security
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
 
    $errors = array();

    // Validate username
    if (empty($username)) {
        $errors[] = "Username is required";
    } elseif (!preg_match('/^[a-zA-Z0-9_]+$/', $username)) {
        $errors[] = "Username can only contain letters, numbers, and underscores";
    }

    
    if (empty($email)) {
        $errors[] = "Email is required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format";
    }

    
    if (empty($password)) {
        $errors[] = "Password is required";
    } elseif (strlen($password) < 8) {
        $errors[] = "Password must be at least 8 characters long";
    } elseif ($password != $confirmPassword) {
        $errors[] = "Passwords do not match";
    }
    
    $existSql = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($conn, $existSql);
    $num = mysqli_num_rows($result);

    if ($num > 0){
        $errors[] = "Username already exists";
    }

    // Prepare and execute the SQL query
    if(empty($errors)){
        $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$hashed_password')";

        if ($conn->query($sql) === TRUE) {
            $showSuccessAlert = true;
            $_SESSION['success_message'] = "Account Created successfully.";
            header("Refresh: 0, URL=login.php");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        $showErrorAlert = true;
        $_SESSION['error_message'] = "Registration Failed";
        $_SESSION['errors'] = $errors; // Store errors in session
        header("Refresh: 0, URL=signup.php");
        exit();
    }   
}

$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and registration page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="ankstyle.css">
    <!-- <link rel="stylesheet" href="./partials/nav.css"> -->
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">



</head>



<body style="display: flex; flex-direction: column; align-items: center;">
    <?php 
        if(isset($_SESSION['success-message'])){
                echo '    <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Registration Successful</strong> '. $_SESSION['success_message'] .'
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
            }
            unset($_SESSION['success_message']);
    ?>

    <?php 
        if(isset($_SESSION['error_message'])){
                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>' . $_SESSION['error_message'] . '</strong>
                <ul>';
                    
                foreach ($_SESSION['errors'] as $error) { 
                    echo '<li>' . $error . '</li>';
                }

                echo '</ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
            unset($_SESSION['error_message']);
            unset($_SESSION['errors']); // Clear errors from session
        }

    ?>

    <div class="wrapper active">

        <div class="form-box register" id="registerForm">
            <h2>Sign Up</h2>
            <form action="signup.php" method="POST">
                <div class="input-box">
                    <span class="icon"><i class="fa-solid fa-user"></i></span>
                    <input id="username" type="text" name="username" required >
                    <label>Username</label> 
                </div>
                <div class="input-box">
                    <span class="icon"><i class="fa-solid fa-envelope"></i></span>
                    <input id="email" type="email" name="email" required >
                    <label>Email</label> 
                </div>
                <div class="input-box">
                    <span class="icon"><i id="registerPasswordIcon" class="fa-solid fa-lock"></i></span>
                    <input id="password" type="password" name="password" required >
                    <label>Password</label>
                </div>
                <div class="input-box" id="cpasswordInputBox">
                    <span class="icon"><i id="confirmPasswordIcon" class="fa-solid fa-lock"></i></span>
                    <input id="confirmPassword" type="password" name="confirmPassword" required >
                    <label>Confirm Password</label>
                </div>
                <br>
                <div class="remember-forgot">
                    <label><input type="checkbox">I agree to the terms and conditions</label>
                </div>
                <button type="submit" class="bttn">Sign Up</button>
                
                <div class="login-register">
                    <p>Already have an account? <a href="login.php" class="login-link">Login</a></p>
                </div>
            </form>
        </div>
    </div>

     <script src="signUpScript.js"></script>
     <!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- <script src="./partials/nav.js"> </script> -->
</body>
</html>











