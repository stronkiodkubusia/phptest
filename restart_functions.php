<?php

if (!function_exists('performPasswordReset')) {
    function performPasswordReset($postUsername, $postNewPassword)
    {
        $message = "";

        include('config/config.php');

        $username = htmlspecialchars($postUsername);
        $newPassword = htmlspecialchars($postNewPassword);

        $username = $conn->real_escape_string($username);
        $newPassword = $conn->real_escape_string($newPassword);

        $query = "SELECT * FROM users WHERE username='$username'";
        $result = $conn->query($query);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $storedPassword = $row['password'];

            $confpassword = $_POST["confpassword"];


            if ($newPassword == $confpassword) {

                $updateQuery = "UPDATE users SET password='$newPassword' WHERE username='$username'";
                if ($conn->query($updateQuery) === TRUE) {
                    $message = "Password changed!";
                } else {
                    $message = "Error in changing password " . $conn->error;
                }
            } else {
                $message = "Check correctness of passwords";
            }
        } else {
            $message = "User does not exist";
        }
        echo '<div class="message">' . $message . '</div>';
        $conn->close();

        return $message;
    }
}
?>