<?php
session_start();
if (!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] != true) {
    header('location: login.php');
    exit;
}

if ($_SESSION['loggedIn']) {
    if ($_SESSION['isAdmin']) {
        $href = "available_volunteer.php";
        $nav_item = "View Volunteers";
    } else {
        $href = "VolunteerForm.php";
        $nav_item = "Volunteer";
    }
}
// Connect to the database
$servername = "localhost";
$username = "ank";
$password = "abcd1234";
$dbname = "food_bridge";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch volunteers from the database
$sql = "SELECT * FROM volunteers";
$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="newlogo.jpg" type="image/x-icon">
    <link rel="stylesheet" href="style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #e5e5e5;
        }
    </style>
</head>

<body>
    <nav class="nav">
        <div class="img">
            <img src="assets/newlogo.jpg" height="90px">FOODBRIDGE

        </div>
        <ul class="nav_list">
            <li class="nav_item"><a href="./homeLoggedIn.php" id="nav_link"><b>Home</b></a></li>
            <li class="nav_item"><a href="./AboutUssuru.php" id="nav_link"><b>About Us</b></a></li>
            <li class="nav_item"><a href="<?php echo $href; ?>" id="nav_link"><b><?php echo $nav_item; ?></b></a></li>
            <li class="nav_item"><a href="./FAQ.php" id="nav_link"><b>FAQs</b></a></li>
            <button class="loginbutton" onclick="showLogOutAlert()">LOGOUT</button>
        </ul>
    </nav>
    <div style="margin: -80px 20px 20px 20px;">
        <br>
        <br>
        <br>
        <br>
        <h2>Volunteers List</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Location</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($num > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr onclick=\"$('#myModal{$row['id']}').modal('show');\">";
                        echo "<td>{$row['id']}</td>";
                        echo "<td>{$row['first_name']}</td>";
                        echo "<td>{$row['last_name']}</td>";
                        echo "<td>{$row['location']}</td>";
                        echo "</tr>";

                        // Modal for each volunteer
                        echo "<div class='modal fade' id='myModal{$row['id']}' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>";
                        echo "<div class='modal-dialog modal-dialog-centered'>";
                        echo "<div class='modal-content'>";
                        echo "<div class='modal-header'>";
                        echo "<h5 class='modal-title' id='exampleModalLabel'>Volunteer Details</h5>";
                        echo "<button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>";
                        echo "</div>";
                        echo "<div class='modal-body'>";
                        // Detailed information about the volunteer
                        echo "<p><b>ID:</b> {$row['id']}</p>";
                        echo "<p><b>First Name:</b> {$row['first_name']}</p>";
                        echo "<p><b>Last Name:</b> {$row['last_name']}</p>";
                        echo "<p><b>Phone Number:</b> {$row['phone_number']}</p>";
                        echo "<p><b>Email:</b> {$row['email']}</p>";
                        echo "<p><b>Location:</b> {$row['location']}</p>";
                        echo "</div>";
                        echo "<div class='modal-footer'>";
                        echo "<button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>";
                        echo "</div>";
                        echo "</div>";
                        echo "</div>";
                        echo "</div>";
                    }
                } else {
                    echo "<tr><td colspan='4'>No volunteers found</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <script>
        function showLogOutAlert() {
            window.location.href = 'logout.php';
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>

</html>