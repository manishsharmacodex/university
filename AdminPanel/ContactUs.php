<?php
    session_start();

    // Check if user is logged in
    if (!isset($_SESSION['user_name']) || empty($_SESSION['user_name'])) {
        header('Location: ../login.php');
        exit();
    }

    $user_profile = $_SESSION['user_name'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us Admin Panel</title>
    <link rel="stylesheet" type="text/css" href="../css/fonts.css">
    <link rel="stylesheet" type="text/css" href="./Admin.css">
</head>
<body>
    <div class="admin-nav-bar">
        <h1 class="title">Contact Us Admin Manage</h1>
        <div class="user-nav">
            <h1 class="user-title">
                <?php echo "Welcome! " . htmlspecialchars($_SESSION['user_name']); ?>
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
            <a href="./ContactUs.php"><button>Contact Us Manage</button></a>
            <a href="./AddNewUser.php"><button>Admin Manage</button></a>
            <a href="./StudentList.php"><button>Student List</button></a>
            <a href="./AdminPasswordChange.php"><button>Admin Password Change</button></a>
        </div>

        <div class="admin-right">
            <h2>Contact Us Messages</h2>

            <?php
                include("../server/connection.php");

                $query = "SELECT * FROM university.contact_us";
                $data = mysqli_query($connection, $query);

                if (!$data) {
                    echo "<p>Error fetching data: " . mysqli_error($connection) . "</p>";
                } else {
                    $total = mysqli_num_rows($data);

                    if ($total > 0) {
                        echo "<table border='1' cellpadding='10' cellspacing='0'>
                                <tr>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email Address</th>
                                    <th>Message</th>
                                </tr>";

                        while ($result = mysqli_fetch_assoc($data)) {
                            echo "<tr>
                                    <td>" . htmlspecialchars($result['first_name']) . "</td>
                                    <td>" . htmlspecialchars($result['last_name']) . "</td>
                                    <td>" . htmlspecialchars($result['email_address']) . "</td>
                                    <td>" . nl2br(htmlspecialchars($result['message'])) . "</td>
                                  </tr>";
                        }

                        echo "</table>";
                    } else {
                        echo "<p>No records found.</p>";
                    }
                }
            ?>
        </div>
    </div>

    <script type="text/javascript" src="./Admin.js"></script>
</body>
</html>
