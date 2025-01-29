 <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $email = $password = $confirmPassword = "";

    if (isset($_POST["username"])) {
        $username = $_POST["username"];
    }
    if (isset($_POST["email"])) {
        $email = $_POST["email"];
    }
    if (isset($_POST["password"])) {
        $password = $_POST["password"];
    }
    if (isset($_POST["confirmPassword"])) {
        $confirmPassword = $_POST["confirmPassword"];
    }

    
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

    
    if (empty($errors)) {
        
?>
        <!DOCTYPE html>
        <html>
        <head>
            <title>Registration Data</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        </head>
        <body>
            <div class="container mt-5">
                <div class="alert alert-success" role="alert">
                    Registration Successful!
                </div>
                <div class="card">
                    <div class="card-header">
                        <h4>Registration Data</h4>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="username" class="form-label"><strong>Username:</strong></label>
                            <input type="text" class="form-control" id="username" value="<?php echo $username; ?>" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label"><strong>Email:</strong></label>
                            <input type="email" class="form-control" id="email" value="<?php echo $email; ?>" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label"><strong>Password:</strong></label>
                            <input type="text" class="form-control" id="password" value="<?php echo str_repeat('*', strlen($password)); ?>" readonly>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                // Redirect to login page after 5 seconds
                setTimeout(function() {
                    window.location.href = "index.html";
                }, 5000);
            </script>
        </body>
        </html>
<?php
    } else {
        // Display validation errors
?>
 <!DOCTYPE html>
        <html>
        <head>
            <title>Registration Errors</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
            <style>

            </style>
        </head>
        <body>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <h4 class="alert-heading">Registration Failed!</h4>
                <p>Please fix the following errors:</p>
                <ul>
                    <?php foreach ($errors as $error) { ?>
                        <li><?php echo $error; ?></li>
                    <?php } ?>
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
            <script>
                // Redirect to login page after 5 seconds
                setTimeout(function() {
                    window.location.href = "index.html";
                }, 5000);
            </script>
        </body>
        </html>
<?php
    }
}
?> 