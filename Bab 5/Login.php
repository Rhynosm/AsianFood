<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($username === 'marmin' && $password === 'Marmin123') {
        $_SESSION['username'] = $username;
        header('Location: admin.php');
        exit();
    } else {
        $error = "Invalid username or password, sudahkah punya akun??";
    }
}
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
            <img src="logo.jpeg" alt="" />
            <h1>Welcome To Asian Food Market</h1>
        </center>
        <a href="index.php" >Home</a>
        <a href="Login.php" >Login</a>
        <a href="Register.php" >Register</a>
    </header>
    <main>
        <div class="form-login">
            <center>
                <h2>Login To Your A-Mart Account </h2>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                    <input type="text" id="username" name="username" placeholder="Username" />
                    <input type="password" name="password" placeholder="Password" />
                    <button type="submit">Login</button>
                </form>
                <?php if(isset($error)) { ?>
                    <p><?php echo $error; ?></p>
                <?php } ?>
            </center>
            <center>
                <p>Don't Have A-Mart Account??</p>
                <a href="register.php">Register Here!!</a>
            </center>
        </div>
    </main>   
    <footer>
        <center>
            <p>&copy; 2023 Our Asian Food Market Website. All rights reserved.</p>
        </center>
    </footer>
</body>
</html>
