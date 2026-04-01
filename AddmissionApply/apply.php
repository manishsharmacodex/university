<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apply Addmission 2025</title>
    <link rel="stylesheet" type="text/css" href="../css/fonts.css">
    <link rel="stylesheet" type="text/css" href="./apply.css">
</head>
<body>
    <h1 class="news"><marquee behavior="" direction="">Apply Addmission 2025 - Get 100% Schoolarships in Your School with your current CGPA & 1st Year & 2nd Year Students can Schoolarships</marquee></h1>

    <form action="#" method="POST" class="form-box">
        <div class="input-fields">
            <label>Name</label>
            <input type="text" placeholder="enter the name" name="candidate_name" required>
        </div>

        <div class="input-fields">
            <label>Email Address</label>
            <input type="text" placeholder="enter email address" name="email_address" required>
        </div>

        <div class="input-fields">
            <label>Phone Number</label>
            <input type="text" placeholder="enter phone Number" name="phone_number" required>
        </div>

        <div class="input-fields">
            <label>Father Name</label>
            <input type="text" placeholder="enter Father Name" name="father_name" required>
        </div>

        <div class="input-fields">
            <label>Mother Name</label>
            <input type="text" placeholder="enter Mother Name" name="mother_name" required>
        </div>

        <div class="input-fields">
            <label>School</label>
            <select name="school" required>
                <option value="Not Selected">Select School</option>
                <option value="School Of Engineering & Technology">School Of Engineering & Technology</option>
                <option value="School Of Business">School Of Business</option>
                <option value="School Of Law">School Of Law</option>
                <option value="School Of Design">School Of Design</option>
                <option value="School Of Arts & Architecture">School Of Arts & Architecture</option>
                <option value="School Of Health Sciences">School Of Health Sciences</option>
                <option value="School Of Vatel & Hotel Management">School Of Vatel & Hotel Management</option>
            </select>
        </div>

        <input type="submit" value="Apply" class="form-btn" name="apply">
    </form>
</body>
</html>


<!-- code for insertion data in backend databases -->
<?php

    include('../server/connection.php');

    if (isset($_POST['apply'])) {
        
        $candidate_name = $_POST['candidate_name'];
        $email_address  = $_POST['email_address'];
        $phone_number   = $_POST['phone_number'];
        $father_name    = $_POST['father_name'];
        $mother_name    = $_POST['mother_name'];
        $school         = $_POST['school'];

        $query = "INSERT INTO university.addmission (candidate_name,email_address,phone_number,father_name,mother_name,school) VALUES('$candidate_name','$email_address','$phone_number','$father_name','$mother_name','$school')";

        $data = mysqli_query($connection,$query);

        if ($data) {
            echo "<script>
                alert('Your Application have been successfully submited');
            </script>";
        }else{
            echo "please try again later";
        }
    }
?>