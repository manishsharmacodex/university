<?php
error_reporting(0);
session_start();
$user_profile = $_SESSION['user'];
if ($user_profile == true) {
    echo "";
}
?>


<!-- main site landing page -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alpha University - Develped By Manish Kumar Sharma</title>
    <!-- css link to html -->
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <!-- google fonts -->
    <link rel="stylesheet" type="text/css" href="./css/fonts.css">
    <!-- favicon for site icon -->
    <link rel="icon" type="image/icon" size="20*20" href="">
</head>

<body>
    <div class="nav-box">
        <div class="top-nav-bar">
            <h1 class="home-info">Alpha University</h1>
            <div class="top-nav-info">
                <a href="./AddmissionApply/apply.php" target="_BLANK" class="nav-links">Apply Now</a>
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
                <li><a href="./index.php">Home</a></li>
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
                            <a href="./InventoryData/InventoryAdmin.php">Dashboard</a>
                            <a href="./InventoryData/ChangePassword.php">Change Password</a>
                            <a href="./InventoryData/logout.php">Logout</a>
                        </div>
                    </li>
                <?php else: ?>
                    <li><a href="./InventoryData/InventoryLogin.php">Login</a></li>
                <?php endif; ?>


            </ul>
        </div>
    </div>
    <!-- slider for new upcoming banner -->
    <div class="banner">
        <div class="banner-text">
            <h1>Welcome To, Alpha University</h1>
            <p>Admission Now 2025 Batch & Get 100% Schoolarships</p>
        </div>
    </div>

    <div class="service-section">
        <h1 class="title-logo">Our <span>Services</span></h1>
        <p class="title-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus obcaecati officiis magnam
        </p>
        <div class="services-box">
            <div class="box">
                <h1>TCS Services</h1>
            </div>

            <div class="box">
                <h1>Learning Management Systems</h1>
            </div>

            <div class="box">
                <h1>Inventory Assets Data</h1>
            </div>

            <div class="box">
                <h1>IT Office Services</h1>
            </div>

            <div class="box">
                <h1>ERP Services</h1>
            </div>

            <div class="box">
                <h1>Sports & Club Services</h1>
            </div>

            <div class="box">
                <h1>University Events</h1>
            </div>

            <div class="box">
                <h1>Convocations</h1>
            </div>
        </div>
    </div>


    <!-- contact us section -->
    <div class="contact-us">
        <h1 class="title-logo">Get Into <span>Touch</span></h1>
        <p class="title-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit.
        <div class="box">
            <div class="left-box">
                <h1>Contact Us</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At dolores, adipisci itaque sapiente
                    necessitatibus quis nam nemo assumenda cupiditate incidunt debitis voluptatem deleniti, laudantium
                    consectetur eligendi, totam distinctio quae neque quos id ab suscipit doloribus ipsum nostrum!
                    Corrupti odio ad modi quo quod perspiciatis illo obcaecati praesentium sit? Maiores, placeat
                    eveniet?</p>
            </div>

            <div class="right-box">
                <form action="#" method="POST">
                    <div class="input-fields">
                        <label>First Name</label>
                        <input type="text" placeholder="Enter Your First Name" name="firstname">
                    </div>

                    <div class="input-fields">
                        <label>Last Name</label>
                        <input type="text" placeholder="Enter Your Last Name" name="lastname">
                    </div>

                    <div class="input-fields">
                        <label>Email Address</label>
                        <input type="text" placeholder="Enter Your Email Address" name="emailaddress">
                    </div>

                    <div class="input-fields">
                        <label>Message</label>
                        <textarea placeholder="Enter Your Message" name="message"></textarea>
                    </div>
                    <input type="submit" value="SEND MESSAGE" class="button" name="sendButton">
                </form>
            </div>
        </div>
    </div>



    <!-- our school section -->
    <div class="our-sechool">
        <h1 class="title-logo">Our <span>School</span></h1>
        <p class="title-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit.
        <div class="school-box">
            <div class="box">
                <img src="./src/ssaa-img.jpg">
                <div class="img-desc">
                    <h1>School of Art and Architecture</h1>
                </div>
            </div>

            <div class="box">
                <img src="./src/sol-img.jpg">
                <div class="img-desc">
                    <h1>School of Law</h1>
                </div>
            </div>

            <div class="box">
                <img src="./src/set-img.jpg">
                <div class="img-desc">
                    <h1>School of Engineering and Technology</h1>
                </div>
            </div>

            <div class="box">
                <img src="./src/ssd-img.jpg">
                <div class="img-desc">
                    <h1>School of Design</h1>
                </div>
            </div>

            <div class="box">
                <img src="./src/shm-img.jpg">
                <div class="img-desc">
                    <h1>Vatel Hotel and Tourism Business School</h1>
                </div>
            </div>

            <div class="box">
                <img src="./src/spd-img.jpg">
                <div class="img-desc">
                    <h1>Department of School of Planning and Development</h1>
                </div>
            </div>

            <div class="box">
                <img src="./src/ssb-img.jpg">
                <div class="img-desc">
                    <h1>School of Business</h1>
                </div>
            </div>

            <div class="box">
                <img src="./src/sshs-img.jpg">
                <div class="img-desc">
                    <h1>School of Health Sciences</h1>
                </div>
            </div>
        </div>
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
                    <li><img src="./src/brand-logo/hp.svg" alt=""></li>
                    <li><img src="./src/brand-logo/dell.svg" alt=""></li>
                    <li><img src="./src/brand-logo/airtel.svg" alt=""></li>
                    <li><img src="./src/brand-logo/facebook.svg" alt=""></li>
                    <li><img src="./src/brand-logo/google.svg" alt=""></li>
                    <li><img src="./src/brand-logo/wipro.svg" alt=""></li>
                    <li><img src="./src/brand-logo/tcs.svg" alt=""></li>
                    <li><img src="./src/brand-logo/tcs.svg" alt=""></li>
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

    <!-- javascript file link to html page -->
    <script type="text/JavaScript" src="./js/index.js"></script>
</body>

</html>



<!-- contact us form inserting data to database -->
<?php
include("./server/connection.php");

if (isset($_POST['sendButton'])) {

    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $email_address = $_POST['emailaddress'];
    $message = $_POST['message'];

    $query = "INSERT INTO university.contact_us (first_name,last_name,email_address,message) VALUES ('$first_name','$last_name','$email_address','$message')";

    $data = mysqli_query($connection, $query);

    if ($data) {
        // echo "We have recieved your contact data";
    } else {
        // echo "failed to send your contact data";
    }
}
?>