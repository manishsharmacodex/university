<?php
    session_start();
    
    $user_profile = $_SESSION['user_name'];
    if ($user_profile == true) {
        echo "";
    }else{
        header('location:../login.php');
    }
?>


<!-- code for admin dashboard -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Password Change</title>
    <link rel="stylesheet" type="text/css" href="../css/fonts.css">
    <link rel="stylesheet" type="text/css" href="./Admin.css">
</head>
<body>
    <div class="admin-nav-bar">
        <h1 class="title">Admin Password Change</h1>
        <div class="user-nav">
            <h1 class="user-title">
                <?php
                    echo "Welcome! ".$_SESSION['user_name'];
                ?>
            </h1>
            <a href="../logout.php"><input type="submit" value="Logout" class="logout"></a>
        </div>
    </div>

    <div class="admin-main-box">
        <div class="admin-box">
            <a href="./Admin.php"><button>Home</button></a>
            <a href="./Inventory.php"><button>Inventory Stock Manage</button></a>
            <a href="./StudentAdmin.php"><button>Student Admin</button></a>
            <a href="./EmailAdmin.php"><button>Email Admin Manage</button></a>
            <a href="./ContactUs.php"><button>Contact US Manage</button></a>
            <a href="./AddNewUser.php"><button>Admin Manage</button></a>
            <a href="./StudentList.php"><button>Student List</button></a>
            <a href="./AdminPasswordChange.php"><button>Admin Password Change</button></a>
        </div>

        <div class="admin-right">
            <form action="#" method="POST">
                <div class="input-fields">
                    <label>New Password</label>
                    <input type="password" placeholder="Enter New Password" name="new_password">
                </div>

                <div class="input-fields">
                    <label>Confirm New Password</label>
                    <input type="password" placeholder="Enter Confirm New Password" name="confirm_new_password">
                </div>

                <input type="submit" value="Change Password" class="registerButton" name="password">
            </form>
        </div>
    </div>


    <script type="text/JavaScript" src="./Admin.js"></script>
</body>
</html>

<!-- admin password change -->
<?php

    include("../server/connection.php");

    if (isset($_POST['password'])) {
        
        $new_password           = $_POST['new_password'];
        $confirm_new_password   = $_POST['confirm_new_password'];

        $query = "UPDATE university.admin SET password = '$new_password' WHERE email = '$user_profile' ";

        $data = mysqli_query($connection,$query);
        if ($data) {
            echo "<script>
                alert('Password Have Been Changed Successfully');
            </script>";
        }else{
            echo "<script>
                alert('Failed To Change Password');
            </script>";
        }
    }
?>