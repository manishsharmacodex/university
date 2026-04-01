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
    <title>Inventory Manage</title>
    <link rel="stylesheet" type="text/css" href="../css/fonts.css">
    <link rel="stylesheet" type="text/css" href="./Admin.css">
</head>
<body>
    <div class="admin-nav-bar">
        <h1 class="title">Inventory Admin Manage</h1>
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
            <div class="admin-right">
            <form action="#" method="POST">
                <div class="input-fields">
                    <label>Frist Name</label>
                    <input type="text" placeholder="Enter First Name" name="first_name">
                </div>

                <div class="input-fields">
                    <label>Last Name</label>
                    <input type="text" placeholder="Enter Last Name" name="last_name">
                </div>

                <div class="input-fields">
                    <label>Phone Number</label>
                    <input type="text" placeholder="Enter Phone Number" maxlength="10" name="phone_number">
                </div>

                <div class="input-fields">
                    <label>Email Address</label>
                    <input type="text" placeholder="Enter Email Address" name="email">
                </div>

                <div class="input-fields">
                    <label>Password</label>
                    <input type="text" placeholder="Enter Password" name="password">
                </div>

                <input type="submit" value="Add New Account" class="registerButton" name="addButton">
            </form>
        </div>
        </div>
    </div>


    <script type="text/JavaScript" src="./Admin.js"></script>
</body>
</html>


<!-- code for add new account for inventory data management -->
<?php
    include("../server/connection.php");

    if (isset($_POST['addButton'])) {

        $first_name         = $_POST['first_name'];
        $last_name          = $_POST['last_name'];
        $email_address      = $_POST['email'];
        $password           = $_POST['password'];

        $query = "INSERT INTO university.inventory_admin (first_name,last_name,email_address,password) VALUES ('$first_name','$last_name','$email_address','$password')";

        $data = mysqli_query($connection,$query);

        if ($data) {
            echo "<script>
            alert('Inventory Data have been successfully added');
            </script>";
        }else{
            echo "<script>
            alert('Failed To Added Please Try Later');
            </script>";
        }
    }
?>