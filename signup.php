<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sknera huj dupa</title>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.1.0/uicons-brands/css/uicons-brands.css'>
    <link rel="stylesheet" href="stylesignup.css">
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


            <input type="password" id="password" name="password" placeholder="password" required>
            <input type="number" id="pin" name="pin" placeholder="pin" required>


            <div class="restart2"><a href="restart.php">Forgot Password?</a></div>
            <div class="restart"><a href="index.php">Login</a></div>


            <button type="submit">Register</button>
            <?php include 'signupt.php'; ?>
        </form>
        <div class='inf'><a href="#"><i class="fi fi-brands-github"></i></a> <a href="#"><i
                    class="fi fi-brands-discord"></i></a> <a href="#"><i class="fi fi-brands-dev"></i> </a></div>
    </div>


</body>

</html>