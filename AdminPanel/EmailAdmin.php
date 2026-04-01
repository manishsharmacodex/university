<?php
    session_start();

    $user_profile = $_SESSION['user_name'];
    if ($user_profile == true) {
        echo "";
    }else{
        header('location:../login.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Admin Manage</title>
    <link rel="stylesheet" type="text/css" href="../css/fonts.css">
    <link rel="stylesheet" type="text/css" href="./Admin.css">
</head>
<body>
    <div class="admin-nav-bar">
        <h1 class="title">Email Admin Manage</h1>
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
            <h1>Admin Panel Dashboard</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, omnis repellendus! Quidem modi maxime voluptatibus id nostrum impedit, non ea vel dolores? Provident beatae, unde nemo tenetur perferendis qui commodi?</p>
        </div>
    </div>


    <script type="text/JavaScript" src="./Admin.js"></script>
</body>
</html>