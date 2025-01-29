<?php

$servername = 'localhost';
$username = 'suhrud';
$password = '12345678';
$dbname = 'food_bridge';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection error: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $fname = $_POST["firstName"];
    $lname = $_POST["lastName"];
    $gender = $_POST["gender"];
    $birthdate = $_POST["birthDate"];
    $contact = $_POST["phone"];
    $email = $_POST["email"];
    $location = $_POST["location"];

    $sql = "INSERT into volunteers(first_name, last_name, gender, birthdate, phone_number, email, location) VALUES ('$fname','$lname','$gender', '$birthdate','$contact','$email','$location')";
    if ($conn->query($sql)) {
        $id = $conn->insert_id;

        $file_name = $_FILES["idProof"]["name"];
        $file_tmp = $_FILES["idProof"]["tmp_name"];

        //renaming file uniquely for each user
        $file_extension = pathinfo($file_name, PATHINFO_EXTENSION);
        $upload_file = 'PK_' . $id . '_idProof.' . $file_extension;
        echo $upload_file;
        $sql = "UPDATE volunteers SET idProof = ? WHERE id = ?";

        // Create a prepared statement
        if ($stmt = $conn->prepare($sql)) {
            // Bind parameters
            $stmt->bind_param("si", $upload_file, $id); // "si" means string, integer

            // Execute the statement
            if ($stmt->execute()) {
                $upload_dir = "uploads/";

                // Move uploaded file to desired location
                if (move_uploaded_file($file_tmp, $upload_dir . $upload_file)) {
                    echo "<script>";
                    echo "alert('Registration done successfully!');";
                    echo "window.location.href = 'homeLoggedIn.php';";
                    echo "</script>";
                } else {
                    echo "<script>";
                    echo "alert('ERROR !!!')";
                    echo "window.location.href = 'VolunteerForm.php'";
                    echo "</script>";
                }
            } else {
                echo "Error updating record: " . $stmt->error;
            }

            // Close the statement
            $stmt->close();
        } else {
            echo "Error in preparing statement: " . $mysqli->error;
        }
        
    }
}



