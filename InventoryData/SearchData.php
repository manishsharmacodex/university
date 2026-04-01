<?php
session_start();
$user_profile = $_SESSION['user'];
if ($user_profile == true) {
    echo "";
} else {
    header('location: ./InventoryLogin.php');
}
  
    include("../server/connection.php");


    $results = [];
    $searchPerformed = false;
    $noDataFound = false;

    if (isset($_POST['searchButton'])) {
        $searchPerformed = true;

        $serialNumber = mysqli_real_escape_string($connection, $_POST['serialnumber']);

        if (!empty($serialNumber)) {
            $query = "SELECT * FROM university.assets_data WHERE _id = '$serialNumber'";
        } else {
            // Show full table if no input
            $query = "SELECT * FROM university.assets_data";
        }

        $data = mysqli_query($connection, $query);

        if (mysqli_num_rows($data) > 0) {
            while ($row = mysqli_fetch_assoc($data)) {
                $results[] = $row;
            }
        } else {
            $noDataFound = true;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Search Inventory Data</title>
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
                <li><a href="./index.php">Home</a></li>
                <li><a href="#">School</a></li>
                <li><a href="#">Blogs</a></li>
                <li><a href="#">News & Event</a></li>
                <li><a href="#">Gallery</a></li>
                <li><a href="#">Fee Payments</a></li>
                <li><a href="#">Examinations</a></li>
                <li><a href="#">TCS Student Login</a></li>
            </ul>
        </div>
    </div>

    <h1 class="user-title">
        <?php
            echo "Welcome! ".$_SESSION['user'];
        ?>
    </h1>

    <a href="./InventoryAdmin.php"><button class="goBackButton">GO Back</button></a>

    <h1 class="title">Search <span>Inventory Data</span></h1>

    <!-- Search Form -->
    <form action="#" method="POST">
        <div class="left-form">
            <div class="input-fields">
                <label>Search Serial Number</label>
                <input type="text" placeholder="Enter Serial Number" name="serialnumber">
            </div>
            <input type="submit" value="SEARCH" class="searchButton" name="searchButton">
        </div>
    </form>

    <!-- Show Table Only After Search -->
    <?php if ($searchPerformed): ?>
        <table>
            <tr>
                <th colspan="11">Inventory Data Management Stock Systems</th>
                <th colspan="4">Installation Date</th>
            </tr>
            <tr>
                <th>Serial Number</th>
                <th>First Name</th>
                <th>Middle Name</th>
                <th>Last Name</th>
                <th>Email Address</th>
                <th>Phone Number</th>
                <th>Gender</th>
                <th>Department</th>
                <th>Assets</th>
                <th>Brands</th>
                <th>Item Type</th>
                <th>Date</th>
                <th>Months</th>
                <th>Year</th>
                <th>Installation Name</th>
            </tr>

            <?php if ($noDataFound): ?>
                <tr>
                    <td colspan="15" style="text-align:center; color:red;">
                        No data found for Serial Number: <strong><?= htmlspecialchars($_POST['serialnumber']) ?></strong>
                    </td>
                </tr>
            <?php else: ?>
                <?php foreach ($results as $row): ?>
                    <tr>
                        <td><?= $row['_id'] ?></td>
                        <td><?= $row['first_name'] ?></td>
                        <td><?= $row['middle_name'] ?></td>
                        <td><?= $row['last_name'] ?></td>
                        <td><?= $row['email_address'] ?></td>
                        <td><?= $row['phone_number'] ?></td>
                        <td><?= $row['gender'] ?></td>
                        <td><?= $row['department'] ?></td>
                        <td><?= $row['assets'] ?></td>
                        <td><?= $row['brands'] ?></td>
                        <td><?= $row['item_type'] ?></td>
                        <td><?= $row['date'] ?></td>
                        <td><?= $row['months'] ?></td>
                        <td><?= $row['year'] ?></td>
                        <td><?= $row['installation_name'] ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </table>
    <?php endif; ?>

    <!-- Footer -->
    <div class="footer">
        <div class="left-footer">
            <h1>Sushant University</h1>
            <p>Empowering the future through innovation, education, and excellence.</p>
            <div class="footer-desc">
                <h1>Company Partners</h1>
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
                <li><a href="#">Download Forms</a></li>
            </ul>
        </div>
    </div>

    <div class="footer-copy">
        <p>&copy; 2025 Alpha University - Manish Kumar Sharma. All Rights Reserved.</p>
    </div>

    <script src="./js/index.js"></script>
</body>
</html>
