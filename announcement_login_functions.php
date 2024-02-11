<?php if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $message = "";
    $username = $_POST["username"];
    $password = $_POST["password"];
    $pin = $_POST["pin"];


    $message = performLogin($username, $password, $pin, $conn);


    echo '<div class="message">' . $message . '</div>';


} ?>