<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sknera huj dupa</title>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.1.0/uicons-brands/css/uicons-brands.css'>
    <link rel="stylesheet" href="stylerestart.css">
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


            <input type="text" id="username" name="username" placeholder="e-mail" required autocomplete="off">


            <input type="password" id="newpassword" name="newpassword" placeholder="new password" required>
            <input type="password" id="confpassword" name="confpassword" placeholder="confirm password" required>


            <div class="restart2"><a href="signup.php">Sign up</a></div>
            <div class="restart"><a href="index.php">Login</a></div>


            <button type="submit">Reset password</button>

            <?php include 'restart_functions.php';
            $message = "";
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $message = "";
                $username = $_POST["username"];
                $newpassword = $_POST["newpassword"];
                $confpassword = $_POST["confpassword"];

                $message = performPasswordReset($username, $newpassword, $confpassword);
            }
            ?>
        </form>
        <div class='inf'><a href="#"><i class="fi fi-brands-github"></i></a> <a href="#"><i
                    class="fi fi-brands-discord"></i></a> <a href="#"><i class="fi fi-brands-dev"></i> </a></div>
    </div>


</body>

</html>