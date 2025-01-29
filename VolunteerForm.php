<?php
session_start();

$servername = 'localhost';
$username = 'suhrud';
$password = '12345678';
$dbname = 'food_bridge';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection error: " . $conn->connect_error);
}
$user = $_SESSION['username'];
$sql = "SELECT * FROM volunteers WHERE username = '$user'";
$result = $conn->query($sql);
if($result->num_rows > 0)
{
    echo "<script> alert('You have already registered'); window.location.href = 'homeLoggedIn.php'; </script>'";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Volunteer Registration Form</title>
    <link rel="stylesheet" href="formstyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<body>
    <div class="container">
        <div class="form-wrapper">
            <div class="form-header">
                <h1>Volunteer Registration Form</h1>
                <button class="cancel-btn" onclick="cancelForm()">
                    <i class="fas fa-times" style="color: white;"></i>
            </div>
            </button>
            <form id="registration-form" action="VolunteerFormPHP.php" method="post" enctype="multipart/form-data">
                <div class="form-row">
                    <div class="form-group">
                        <label for="firstName">First Name:</label>
                        <input type="text" id="firstName" name="firstName" required>
                    </div>
                    <div class="form-group">
                        <label for="lastName">Last Name:</label>
                        <input type="text" id="lastName" name="lastName" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label>Gender:</label>
                        <div class="radio-group">
                            <input type="radio" id="male" name="gender" value="Male" required>
                            <label for="male">Male</label>
                            <input type="radio" id="female" name="gender" value="Female">
                            <label for="female">Female</label>
                            <input type="radio" id="other" name="gender" value="Other">
                            <label for="other">Other</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="birthDate">Birth Date:</label>
                        <input type="date" id="birthDate" name="birthDate" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number:</label>
                    <input type="tel" id="phone" name="phone" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="location">Location:</label>
                    <select id="location" name="location" required>
                        <option value="">Select a location</option>
                        <option value="Mumbai">Mumbai</option>
                        <option value="Pune">Pune</option>
                        <option value="Kolhapur">Kolhapur</option>
                        <option value="Dhule">Dhule</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="idProof">ID Proof :</label>
                    <input type="file" id="idProof" name="idProof" accept=".jpg, .jpeg, .png, .pdf" required>
                </div>
                <div class="form-group">
                    <button type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
    <script>
        const form = document.getElementById('registration-form');
        const phoneInput = document.getElementById('phone');
        const emailInput = document.getElementById('email');
        form.addEventListener('submit', function(event) {
            event.preventDefault();
            const phoneNumber = phoneInput.value.trim();
            const email = emailInput.value.trim();
            const phonePattern = /^\d{10}$/;
            const emailPattern = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;
            if (!phonePattern.test(phoneNumber)) {
                alert('Please enter a valid 10-digit phone number');
                return;
            }
            if (!emailPattern.test(email)) {
                alert('Please enter a valid email address');
                return;
            }
            form.submit();
        });

        function cancelForm() {
            if (confirm("Are you sure you want to cancel?")) {
                window.location.href = "./homeLoggedIn.php";
            }
        }
    </script>
</body>

</html>