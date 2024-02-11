<?php
// Include your database connection file
include('config/config.php');

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Collect form data
    $username = $_POST['username'];
    $password = $_POST['password'];
    $pin = $_POST['pin'];

    // Hash the password for security
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Check if the user already exists in the database
    $query = "SELECT * FROM users WHERE username = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    // Define $insert_stmt outside the conditional block
    $insert_stmt = null;

    // If the user doesn't exist, create a new user
    if ($result->num_rows == 0) {
        $insert_query = "INSERT INTO users (username, password, pin) VALUES (?, ?, ?)";
        $insert_stmt = $conn->prepare($insert_query);
        $insert_stmt->bind_param("sss", $username, $hashed_password, $pin);
        $insert_stmt->execute();

        $message = "Successful registration!";
        echo '<div class="message">' . $message . '</div>';
    } else {
        $message = "Such user already exists";
        echo '<div class="message">' . $message . '</div>';
    }

    // Close database connections
    $stmt->close();

    // Close $insert_stmt only if it is not null
    if ($insert_stmt) {
        $insert_stmt->close();
    }

    $conn->close();
}
?>