<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="login.css">
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
</head>
<body>
    <!-- navbar -->
    <?php include("navbar.php") ?>

    <div class="container">
        <div class = "login-container">
            <h1>Login untuk Melanjutkan</h1>
            <form action="data.php" method="post" >
                <div class="form-group">
                    <label for="username">Username atau Email:</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="form-group">
                    <label for="user_id">PIN:</label>
                    <input type="number" id="pin" name="pin" required>
                </div>
                <input type="submit" value="Login" name="value">
            </form>
        </div>
    </div>

    <!-- footer -->
     <?php include("footbar.php")?>
     
    <script src="scripts/script.js"></script>
</body>
</html>