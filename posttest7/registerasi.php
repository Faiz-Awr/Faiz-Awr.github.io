<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
    <link rel="stylesheet" href="styles/login.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
</head>
<body>
    <div class="container">
        <div class = "login-container">
            <h1>Login untuk Melanjutkan</h1>
            <form action="data.php" method="post" >
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="Email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Username:</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="form-group">
                    <label for="password">Confirm Password:</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <p>Belum ada akun? Buat di <a href="regis.php" style="color:blue"> sini!</a></p>
                <input type="submit" value="submit" name="submit">
            </form>
        </div>
    </div>
    <script src="scripts/script.js"></script>
</body>
</html>