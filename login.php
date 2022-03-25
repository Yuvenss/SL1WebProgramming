<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body style="background-color: #fbfdac;">
    <div class="login-title">
        Login
    </div>

    <div class="card">
        <form action="prosesLogin.php" method="post">
            <div class="login-username">
                <label for="login-username">Username</label>
                <input type="text" name="login-username">
            </div>
    
            <div class="login-password">
                <label for="login-password">Password</label>
                <input type="password" name="login-password" id="">
            </div>
    
            <div class="login-btn">
                <input type="submit" value="Login" name="login-btn">
                <a href="./welcome.php">
                    <button>Kembali</button>
                </a>
            </div>
        </form>
    </div>
</body>
</html>