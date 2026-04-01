<?php
    error_reporting(0);
    session_start();
    $user_profile = $_SESSION['user'];
    if ($user_profile == true) {
        echo "";
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogs Page</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/fonts.css">
</head>
<body>
    <div class="nav-box">
        <div class="top-nav-bar">
            <h1 class="home-info">Alpha University</h1>
            <div class="top-nav-info">
                <a href="../AddmissionApply/apply.php" target="_BLANK" class="nav-links">Apply Now</a>
                <p class="contact_number">Admission Enquiry - 1800 1020 200</p>
            </div>
        </div>
        <div class="navigation-bar">
            <div class="nav-btn">
                <div class="hamburger" aria-label="Menu" role="button" tabindex="0" aria-expanded="false"
                    aria-controls="nav-menu">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
            <ul id="nav-menu">
            </ul>

            <ul>
                <li><a href="../index.php">Home</a></li>
                <li><a href="#">School</a></li>
                <li><a href="./Pages/Blogs.php">Blogs</a></li>
                <li><a href="#">News & Event</a></li>
                <li><a href="#">Gallery</a></li>
                <li><a href="#">Fee Payments</a></li>
                <li><a href="#">Examinations</a></li>
                <li><a href="#">TCS Student Login</a></li>
                <!-- Conditional Login/Username Display -->
                <?php if (isset($_SESSION['user'])): ?>
                    <li class="dropdown">
                        <a href="#" class="dropbtn"><?php echo htmlspecialchars($_SESSION['user']); ?> &#x25BC;</a>
                        <div class="dropdown-content">
                            <a href="../InventoryData/InventoryAdmin.php">Dashboard</a>
                            <a href="../InventoryData/ChangePassword.php">Change Password</a>
                            <a href="../InventoryData/logout.php">Logout</a>
                        </div>
                    </li>
                <?php else: ?>
                    <li><a href="../InventoryData/InventoryLogin.php">Login</a></li>
                <?php endif; ?>
            </ul>
        </div>
    </div>


    <!-- code for blogs page container -->
     <div class="blog-container">
        <div class="blogs-box"></div>
        <div class="blogs-box"></div>
        <div class="blogs-box"></div>
        <div class="blogs-box"></div>
        <div class="blogs-box"></div>
        <div class="blogs-box"></div>
        <div class="blogs-box"></div>
        <div class="blogs-box"></div>
        <div class="blogs-box"></div>
        <div class="blogs-box"></div>
     </div>



     <!-- code for footer design -->
    <div class="footer">
        <div class="left-footer">
            <h1>Sushant University</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias omnis ea sed eius dicta obcaecati
                consectetur totam alias natus pariatur.</p>
            <div class="footer-desc">
                <h1>Company Partner</h1>
                <ul class="company-brand">
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
                <li><a href="../index.php">Home</a></li>
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

    <!-- javascript file link to html page -->
     <script type="text/javascript" src="../js/index.js"></script>
</body>
</html>