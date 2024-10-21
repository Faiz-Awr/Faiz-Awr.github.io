<?php 
require "koneksi.php";

if(isset($_POST['register'])){
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    if($password === $cpassword){
        $password = password_hash($password, PASSWORD_DEFAULT);

        $result = mysqli_query($conn, "SELECT email FROM daftar WHERE email = '$email'");
        $result1 = mysqli_query($conn, "SELECT email FROM daftar WHERE username = '$username'");

        if(mysqli_fetch_assoc($result) || mysqli_fetch_assoc($result1)){
            echo "<script>
            alert('Email atau username sudah digunakan, gunakan login untuk masuk.');
            document.location.href = 'login.php';
            </script>";
        }
        else{
            $sql = "INSERT INTO daftar VALUES ('', '$email', '$username', '$password')";

            $result = mysqli_query($conn, $sql);

            if(mysqli_affected_rows($conn) > 0){
                echo "<script>
                alert('Registrasi Berhasil.');
                document.location.href = 'login.php';
                </script>";
            }
            else{
                echo "<script>
                alert('Registrasi gagal.');
                document.location.href = 'login.php';
                </script>";
            }
        }
    }
    else{
        echo "<script>
        alert('Konfirmasi password tidak sesuai.');
        document.location.href = 'login.php';
        </script>";
    }
}


if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $result = mysqli_query($conn, "SELECT * FROM daftar WHERE email = '$email'");

    if(mysqli_num_rows($result) === 1){
        $row = mysqli_fetch_assoc($result);

        if(password_verify($password, $row['password'])){
            session_start();
            $_SESSION['login'] = true;
            $_SESSION['username'] = $row['username']; 
            echo "<script>
            alert('Login Berhasil!');
            document.location.href = 'index.php';
            </script>";
            exit;
        }
        
        }

echo "<script>
    alert('Login Error: Unable to log in. Please double-check your email and password.');
    document.location.href = 'login.php';
    </script>";
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Sign Up</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="styles/login.css">

</head>
<body>
    <!-- Form Container -->
    <div class="form-container">
        <div class="col-1">
            <p class = "featured-words"> Ready to Grow? Login or Sign Up and Let’s Get Started!</p>
        </div> 

        <div class="col col-2">
            <div class="btn-box">
                <button class="btn btn-1" id="login" >Login</button>
                <button class="btn btn-2" id="register" >Sign Up</button>
            </div>

            <!-- Login Form Container -->
            <form action="" method="POST">
                <div class="login-form">
                    <div class="form-title">
                        <span>Login</span>
                    </div>
                    <div class="form-inputs">
                        <div class="input-box">
                            <input type="email" class="input-field" name="email" id="email" placeholder="Email" required>
                            <i class="bx bx-envelope icon"></i>
                        </div>
                        <div class="input-box"> 
                            <input type="password" class="input-field" name="password" id="password" placeholder="Password" required>
                            <i class="bx bx-lock-alt icon"></i>
                        </div>
                        <div class="forgot-pass">
                            <a href="#">Forgot Password?</a>
                        </div>
                        <div class="input-box">
                            <button class="input-submit" name="login" id="login">
                                <span>Login</span>
                                <i class="bx bx-right-arror-alt"></i>
                            </button>
                        </div>
                    </div>
                    <div class="social-login">
                        <i class="bx bxl-google"></i>
                        <i class="bx bxl-github"></i>
                        <i class="bx bxl-twitter"></i>
                        <i class="bx bxl-instagram"></i>
                    </div>
                </div>
            </form>

            <!-- Register Form Container -->
            <form action="" method="POST">
                <div class="register-form">
                    <div class="form-title">
                        <span>Create Account</span>
                    </div>
                    <div class="form-inputs">
                        <div class="input-box">
                            <input type="email" class="input-field" name = "email" id="email" placeholder="Email" required>
                            <i class="bx bx-envelope icon"></i>
                        </div>
                        <div class="input-box">
                            <input type="text" class="input-field" name = "username" id="username"placeholder="Username" required>
                            <i class="bx bx-user icon"></i>
                        </div>
                        <div class="input-box"> 
                            <input type="password" class="input-field" name = "password" id="password" placeholder="Password" required>
                            <i class="bx bx-lock-alt icon"></i>
                        </div>
                        <div class="input-box"> 
                            <input type="password" class="input-field" name = "cpassword" id="cpassword" placeholder="Confirm Password" required>
                            <i class="bx bx-lock-alt icon"></i>
                        </div>
                        <div class="input-box">
                            <button class="input-submit" name="register" id="register">
                                <span>Sign Up</span>
                                <i class="bx bx-right-arror-alt"></i>
                            </button>
                        </div>
                    </div>
                    <div class="social-login">
                        <i class="bx bxl-google"></i>
                        <i class="bx bxl-github"></i>
                        <i class="bx bxl-twitter"></i>
                        <i class="bx bxl-instagram"></i>
                    </div>
                </div>
            </form>
        </div> 
    </div>
    <script src="scripts/main.js"></script>
</body>
</html>
