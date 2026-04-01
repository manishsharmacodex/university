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
    <title>Inventory Admin Page</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/fonts.css">
    <link rel="stylesheet" type="text/css" href="./InventoryData.css">
</head>

<body>
    <div class="nav-box">
        <div class="top-nav-bar">
            <h1 class="home-info">Sushant University</h1>
            <div class="top-nav-info">
                <a href="../AddmissionApply/Apply.php" class="nav-links">Apply Now</a>
                <p>Admission Enquiry - 1800 1020 200</p>
            </div>
        </div>
        <div class="navigation-bar">
            <div class="nav-btn">
            </div>
            <ul>
                <li><a href="../index.php">Home</a></li>
                <li><a href="#">School</a></li>
                <li><a href="#">Blogs</a></li>
                <li><a href="#">News & Event</a></li>
                <li><a href="#">Gallery</a></li>
                <li><a href="#">Fee Payments</a></li>
                <li><a href="#">Examinations</a></li>
                <li><a href="#">TCS Student Login</a></li>
                <!-- <li><a href="./InventoryData.php">Login</a></li> -->
            </ul>
        </div>
    </div>

    <a href="./logout.php" class="logoutBtn">Logout</a>
    <h1 class="user-title">
        <?php
            echo "Welcome! ".$_SESSION['user'];
        ?>
    </h1>

    <h1 class="title">Inventory Data Management Systems</h1>

    <!-- form create for inventory data management systems -->
    <div class="inventory-box">
        <a href="./SearchData.php"><button>Search Inventory</button></a>
        <a href="./AddInventory.php"><button>Manage Inventory</button></a>
    </div>




    <div class="footer">
        <div class="left-footer">
            <h1>Sushant University</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias omnis ea sed eius dicta obcaecati
                consectetur totam alias natus pariatur.</p>
            <div class="footer-desc">
                <h1>Company Partner</h1>
                <ul>
                    <li>HP</li>
                    <li>DELL</li>
                    <li>Google</li>
                    <li>Amazon</li>
                    <li>TCS</li>
                </ul>
            </div>
        </div>

        <div class="center-footer">
            <h1>Menu Links</h1>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">TCS Self Services</a></li>
                <li><a href="#">Results</a></li>
                <li><a href="#">Fee Payments</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">Login & Register</a></li>
            </ul>
        </div>

        <div class="right-footer">
            <h1>Services</h1>
            <ul>
                <li><a href="#">Sports & Club Services</a></li>
                <li><a href="#">TCS Services</a></li>
                <li><a href="#">Learning Management Services</a></li>
                <li><a href="#">IT Services</a></li>
                <li><a href="#">ERP Services</a></li>
                <li><a href="#">Inventory Stock Management Systems</a></li>
                <li><a href="#">School Management Services</a></li>
                <li><a href="#">Apply Internships</a></li>
                <li><a href="#">Downloads Forms</a></li>
            </ul>
        </div>
    </div>


    <div class="footer-copy">
        <p>&copy; 2025 Alpha University - Manish Kumar Sharama All Right Reserved</p>
    </div>


    <script type="text/JavaScript" src="./js/index.js"></script>
</body>

</html>