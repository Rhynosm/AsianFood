<!DOCTYPE html>
<html>
<head>
    <title>asianfoodmarketregisterpage</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Register.css">
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
        <form action="register-proses.php" method="post">
            <div class="form-login">
                <center>
                    <h2>Register To Your A-Mart Account Here!! </h2>
                    <input type="email" id="email" name="email" placeholder="Email" required />
                    <br>
                    <input type="number" id="number" name="phonenumber" placeholder="PhoneNumber" required />
                    <br>
                    <input type="text" id="username" name="username" placeholder="Username" required />
                    <br>
                    <input type="password" id="pass" name="password" placeholder="Password" required />
                </center>
                <center>
                    <button type="submit" name="register">Register</button>
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
