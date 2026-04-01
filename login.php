<?php
    session_start();
    include("./server/connection.php");

    if (isset($_POST['loginButton'])) {
        $email    = $_POST['email'];    
        $password = $_POST['password'];

        $query = "SELECT * FROM university.admin WHERE email = '$email' AND password = '$password'";
        $data = mysqli_query($connection, $query);
        $total = mysqli_num_rows($data);

        if ($total == 1) {
            $_SESSION['user_name'] = $email;
            echo "<script>alert('Login Successfully');</script>";
            header('Location: ./AdminPanel/Admin.php');
        } else {
            echo "<script>alert('Invalid Email or Password!');</script>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="./css/login.css">
</head>
<body>
    <div class="container">
        <form method="POST" class="login-form">
            <h2>Admin Login</h2>
            <div class="input-fields">
                <input type="email" name="email" placeholder="Enter Email" required>
            </div>
            <div class="input-fields">
                <input type="password" name="password" placeholder="Enter Password" required>
            </div>
            <input type="submit" name="loginButton" class="loginBtn" value="Login">
            <a href="./ForgetPassword/ForgetPassword.php" class="forgetPassword">Forgot Password?</a>
        </form> 
    </div>
</body>
</html>
