<?php 
    session_start();
    if(!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] != true) {
        header('location: login.php');
        exit;
    }
    
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="unnecessary file for now/partials/nav.css">
    <style>
    /* Styles for success alert */
    .alert {
        padding: 15px;
        margin-bottom: 20px;
        border: 1px solid var(--medium-turquoise);
        border-radius: 5px;
        background-color: var(--baby-powder);
        color: var(--medium-turquoise);
        font-size: var(--fs-9);
    }

    /* Styles for button */
    .btn {
        display: inline-block; /* Ensure the button is inline */
        max-width: fit-content; /* Limit button width to its content */
        position: relative;
        background-color: var(--medium-turquoise);
        color: var(--white);
        font-weight: var(--fw-600);
        padding: 12px 32px;
        display: flex;
        align-items: center;
        gap: 10px;
        transition: var(--transition-2);
        text-decoration: none; /* Ensure button text doesn't get underlined */
    }

    .btn ion-icon {
        --ionicon-stroke-width: 55px;
        font-size: 1.8rem;
    }

    /* Additional style for button hover effect */
    .btn:not(.btn-outline)::after {
        content: "";
        position: absolute;
        inset: 0;
        border: 1px solid var(--medium-turquoise);
        transform: translate(5px, 5px);
        transition: var(--transition-2);
    }

    .btn:is(:hover, :focus)::after {
        transform: translate(0, 0);
    }
</style>
</head>
<body>
    <?php require('unnecessary file for now/partials/_nav.php') ?>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <?php 
        if($_SESSION['loggedIn'] == true){
                echo '<div class="alert">You are Logged in.</div>';
            }
    ?>
    <p>Welcome <?php echo $_SESSION['username'] ?></p>
    <div></div>
    <a href="logout.php" class="btn">Logout</a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="unnecessary file for now/partials/nav.js"> </script>
</body>
</html>