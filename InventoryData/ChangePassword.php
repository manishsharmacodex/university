<?php
session_start();
$user_profile = $_SESSION['user'];
if ($user_profile == true) {
    echo "";
} else {
    header('location: ./InventoryLogin.php');
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Change Password</title>
    <link rel="stylesheet" href="./InventoryData.css">
    <link rel="stylesheet" href="../css/fonts.css">
</head>
<body class="password-body">
    <div class="container">
        <button class="go-back"><a href="../index.php">Go Back</a></button>
        <h1 class="password-title">Change Your Password</h1>
        <form action="" method="POST" class="change-password-form">
            <div class="form-group">
                <label for="new-password">New Password</label>
                <input type="password" id="new-password" name="new-password" placeholder="Enter new password" required>
            </div>

            <div class="form-group">
                <label for="confirm-password">Confirm Password</label>
                <input type="password" id="confirm-password" name="confirm-password" placeholder="Confirm new password" required>
            </div>

            <button type="submit" class="submit-btn" name="update-password">Update Password</button>
        </form>
    </div>
</body>
</html>


<!-- code for user admin password change -->
<?php

    include('../server/connection.php');
    if (isset($_POST['update-password'])) {
        
        $new_password = $_POST['new-password'];
        $confirm_new_password = $_POST['confirm-password'];

         $query = "UPDATE university.inventory_admin SET password = '$new_password' WHERE email_address = '$user_profile' ";

        $data = mysqli_query($connection,$query);
        if ($data) {
            echo "<script>
                alert('Password Have Been Changed Successfully');
            </script>";
            header('Location: ./logout.php');
        }else{
            echo "<script>
                alert('Failed To Change Password');
            </script>";
        }

    }


?>