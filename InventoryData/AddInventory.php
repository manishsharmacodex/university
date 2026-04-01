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
    <title>Add Inventory Data</title>
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

    <h1 class="user-title">
        <?php
            echo "Welcome! ".$_SESSION['user'];
        ?>
    </h1>

    <a href="./InventoryAdmin.php"><button class="goBackButton">GO Back</button></a>

    <!-- title -->
    <h1 class="title">Add University <span>Inventory Data</span></h1>


    <div class="form-box">
    <!-- code for add inventory data to database -->
    <form action="#" method="POST" class="addInventory">
        <div class="left-form">
            <p class="news">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus numquam illum quos amet
                in magnam inventore enim.</p>
            <div class="input-fields">
                <label>First Name</label>
                <input type="text" placeholder="Enter First Name" name="firstname" required>
            </div>

            <div class="input-fields">
                <label>Middle Name</label>
                <input type="text" placeholder="Enter Middle Name" name="middlename">
            </div>

            <div class="input-fields">
                <label>Last Name</label>
                <input type="text" placeholder="Enter Last Name" name="lastname" required>
            </div>

            <div class="input-fields">
                <label>Email Address</label>
                <input type="text" placeholder="Enter Email Address" name="email" required>
            </div>

            <div class="input-fields">
                <label>Phone Number</label>
                <input type="text" placeholder="Enter Phone Number" name="phone" maxlength="10" required>
            </div>

            <div class="input-fields">
                <label>Gender</label>
                <select name="gender" required>
                    <option value="Not Selected">Select Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
        </div>

        <div class="right-form">
            <div class="input-fields">
                <label>Department</label>
                <select name="department" required>
                    <option value="Not Selected">Select Department</option>
                    <option value="HR Department">HR Department</option>
                    <option value="Account Office">Account Office</option>
                    <option value="IT Department">IT Department</option>
                    <option value="Addmission Department">Addmission Department</option>
                    <option value="Faculty Department">Faculty Department</option>
                    <option value="Canteen Department">Canteen Department</option>
                    <option value="Library Department">Library Department</option>
                    <option value="Vice Chancellor">Vice Chancellor</option>
                    <option value="Registar Office">Registar Office</option>
                    <option value="CRC Department">CRC Department</option>
                    <option value="Dean Office">Dean Office</option>
                    <option value="Director HR">Director HR</option>
                    <option value="Trusty Office">Trusty Office</option>
                    <option value="Examinations Department">Examinations Department</option>
                    <option value="CEO Office">CEO Office</option>
                    <option value="Head IT">Head IT</option>
                    <option value="Account Head">Account Head</option>
                    <option value="CRC Head">CRC Head</option>
                    <option value="Addmission Head">Addmission Head</option>
                    <option value="Library Head">Library Head</option>
                </select>
            </div>


            <div class="input-fields">
                <label>Assets</label>
                <select name="assets" required>
                    <option value="Not Selected">Select Assets</option>
                    <option value="Monitor">Monitor</option>
                    <option value="CPU">CPU</option>
                    <option value="Keyboard">Keyboard</option>
                    <option value="Mouse">Mouse</option>
                    <option value="VGA Cable">VGA Cable</option>
                    <option value="Power Cable">Power Cable</option>
                    <option value="Mouse Pad">Mouse Pad</option>
                    <option value="SSD">SSD</option>
                    <option value="HDD">HDD</option>
                    <option value="RAM">RAM</option>
                    <option value="CMOS Battery">CMOS Battery</option>
                    <option value="Web Cam">Web Cam</option>
                    <option value="Laptop">Laptop</option>
                    <option value="Printer">Printer</option>
                    <option value="Cartridge">Cartridge</option>
                    <option value="Motherboard">Motherboard</option>
                    <option value="Ethernet Cable">Ethernet Cable</option>
                </select>
            </div>

            <div class="input-fields">
                <label for="">Brands</label>
                <select name="brands" required>
                    <option value="Not Selected">Select Brands</option>
                    <option value="Dell">Dell</option>
                    <option value="HP">HP</option>
                    <option value="Logitech">Logitech</option>
                    <option value="Lenovo">Lenovo</option>
                    <option value="Accer">Accer</option>
                    <option value="Zebronics">Zebronics</option>
                    <option value="Asus">Asus</option>
                    <option value="Apple">Apple</option>
                    <option value="Samsung">Samsung</option>
                    <option value="Sony">Sony</option>
                    <option value="MSI">MSI</option>
                    <option value="MI">MI</option>
                </select>
            </div>

            <div class="input-fields">
                <label for="">Item Type</label>
                <select name="itemtype" required>
                    <option value="Not Selected">Select Item Type</option>
                    <option value="New">New</option>
                    <option value="Replace">Replace</option>
                    <option value="Repair">Repair</option>
                </select>
            </div>

            <div class="input-fields">
                <label for="">Date Of Installation</label>
                <div class="datebox">
                    <select name="date" required>
                        <option value="Not Selected">Date</option>
                        <option value="01">01</option>
                        <option value="02">02</option>
                        <option value="03">03</option>
                        <option value="04">04</option>
                        <option value="05">05</option>
                        <option value="06">06</option>
                        <option value="07">07</option>
                        <option value="08">08</option>
                        <option value="09">09</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">34</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                    </select>



                    <select name="months" required>
                        <option value="Not Selected">Months</option>
                        <option value="January">January</option>
                        <option value="February">February</option>
                        <option value="March">March</option>
                        <option value="April">April</option>
                        <option value="May">May</option>
                        <option value="June">June</option>
                        <option value="July">July</option>
                        <option value="August">August</option>
                        <option value="September">September</option>
                        <option value="October">October</option>
                        <option value="November">November</option>
                        <option value="December">December</option>
                    </select>



                    <select name="year" required>
                        <option value="Not Selected">Year</option>
                        <option value="2000">2000</option>
                        <option value="2001">2001</option>
                        <option value="2002">2002</option>
                        <option value="2003">2003</option>
                        <option value="2004">2004</option>
                        <option value="2005">2005</option>
                        <option value="2006">2006</option>
                        <option value="2007">2007</option>
                        <option value="2008">2008</option>
                        <option value="2009">2009</option>
                        <option value="2010">2010</option>
                        <option value="2011">2011</option>
                        <option value="2012">2012</option>
                        <option value="2013">2013</option>
                        <option value="2014">2014</option>
                        <option value="2015">2015</option>
                        <option value="2016">2016</option>
                        <option value="2017">2017</option>
                        <option value="2018">2018</option>
                        <option value="2019">2019</option>
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>
                        <option value="2024">2024</option>
                        <option value="2025">2025</option>
                    </select>
                </div>
            </div>


            <div class="input-fields">
                <label for="">Name Of Installation</label>
                <input type="text" placeholder="Enter Installation Name" name="nameinstallation" required>
            </div>

            <input type="submit" value="Submit" class="addButton" name="addButton">
        </div>
    </form>
    </div>




    <!-- footer sections -->
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
</body>

</html>



<!-- code for inserting data to database -->
<?php
include("../server/connection.php");

if (isset($_POST['addButton'])) {

    $first_name = $_POST['firstname'];
    $middle_name = $_POST['middlename'];
    $last_name = $_POST['lastname'];
    $email_address = $_POST['email'];
    $phone_number = $_POST['phone'];
    $gender = $_POST['gender'];
    $department = $_POST['department'];
    $assets = $_POST['assets'];
    $brands = $_POST['brands'];
    $item_type = $_POST['itemtype'];
    $date = $_POST['date'];
    $months = $_POST['months'];
    $year = $_POST['year'];
    $installation_name = $_POST['nameinstallation'];

    $query = "INSERT INTO university.assets_data (first_name,middle_name,last_name,email_address,phone_number,gender,department,assets,brands,item_type,date,months,year,installation_name) VALUES ('$first_name','$middle_name','$last_name','$email_address','$phone_number','$gender','$department','$assets','$brands','$item_type','$date','$months','$year','$installation_name')";

    $data = mysqli_query($connection, $query);

    if ($data) {
        echo "<script>
                alert('Your Data Have Been Added To Our Inventory Stock Management Systems');
            </script>";
    } else {
        echo "Failed To Add Please Try Later";
    }
}
?>