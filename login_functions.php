<?php

function performLogin($postUsername, $postPassword, $postPin, $conn)
{

    $message = "";

    $username = htmlspecialchars($postUsername);
    $password = htmlspecialchars($postPassword);
    $pin = htmlspecialchars($postPin);

    $username = $conn->real_escape_string($username);
    $password = $conn->real_escape_string($password);
    $pin = $conn->real_escape_string($pin);

    $query = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $hashed_password_from_database = $row['password'];

        if (password_verify($password, $hashed_password_from_database) && $pin == $row['pin']) {
            $message = "Login successful!";
            header("Location: http://localhost/PHPXDD/start.php");
            exit();
        } else {
            $message = "Incorrect login details.";
        }
    } else {
        $message = "Incorrect login details.";
    }

    return $message;
}

?>