<?php
include 'restart_functions.php';

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $message = "";
    $username = $_POST["username"];
    $newpassword = $_POST["newpassword"];
    $confpassword = $_POST["confpassword"];


    if ($newpassword === $confpassword) {
        $message = performPasswordReset($username, $newpassword);

    
        if ($message === "Password changed successfully!") {
            $success_message = "Udało się zmienić hasło";
        } else {
            $error_message = $message;
        }
    } else {
        $error_message = "Hasła nie pasują do siebie";
    }
}
?>