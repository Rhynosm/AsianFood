<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>asianfoodmarketloginpage</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Login.css">
</head>
<body>
    <header>
        <center>
            <img src="logo.jpeg" alt="Logo" />
            <h1>Welcome To Asian Food Market</h1>
        </center>
        <a href="index.php">Home</a>
        <a href="Login.php">Login</a>
        <a href="Register.php">Register</a>
    </header>
    <main>
        <form action="login-proses.php" method="post">
            <div class="form-login">
                <center>
                    <h2>Login To Your A-Mart Account</h2>
                    <input type="text" id="username" name="username" placeholder="Username" required />
                    <input type="password" name="password" placeholder="Password" required />
                    <button type="submit" name="login">Login</button>
                </center>
                <center>
                    <p>Don't Have A-Mart Account??</p>
                    <a href="register.php">Register Here!!</a>
                </center>
            </div>
        </form>
    </main>   
    <footer>
        <center>
            <p>&copy; 2023 Our Asian Food Market Website. All rights reserved.</p>
        </center>
    </footer>
</body>
</html>
