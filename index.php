<?php
include 'login_functions.php';

$message = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $pin = $_POST["pin"];

    include('config/config.php'); // Upewnij się, że dodajesz tę linię

    $message = performLogin($username, $password, $pin, $conn);

    // Nie trzeba tutaj używać header(Location), ponieważ jest obsługiwane w funkcji performLogin
}
?>

<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sknera huj dupa</title>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.1.0/uicons-brands/css/uicons-brands.css'>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
</head>

<body>
    <div class="container">

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" autocomplete="off">

            <div class="logokur"><i class="fi fi-brands-slack" id="logo"></i>
                <div class="resta"> jacob.ai</div>
            </div>


            <input type="text" id="username" name="username" placeholder="e-mail" required>


            <input type="password" id="password" name="password" placeholder="password" required>


            <input type="number" id="pin" name="pin" placeholder="pin" required>
            <div class="restart2"><a href="signup.php">Sign up</a></div>
            <div class="restart"><a href="restart.php">Forgot Password?</a></div>


            <button type="submit">Login</button>

            <?php include 'announcement_login_functions.php'; ?>

        </form>
        <div class='inf'><a href="#"><i class="fi fi-brands-github"></i></a> <a href="#"><i
                    class="fi fi-brands-discord"></i></a> <a href="#"><i class="fi fi-brands-dev"></i> </a></div>
    </div>
    <b>

</body>

</html>