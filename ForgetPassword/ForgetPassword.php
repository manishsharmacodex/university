<?php
    include("../server/connection.php");

    if (isset($_POST['search'])) {

        $employee_id = $_POST['employee_id'];

        $query = "SELECT * FROM university.admin WHERE _id = '$employee_id' ";

        $data = mysqli_query($connection,$query);
        $result = mysqli_fetch_assoc($data);
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget Password</title>
    <link rel="stylesheet" type="text/css" href="../css/fonts.css">
    <link rel="stylesheet" type="text/css" href="./ForgetPassword.css">
</head>
<body>
    <form action="#" method="POST">
        <h1>Forget Password</h1>
        <div class="input-fields">
            <input type="text" placeholder="Enter Employee Id" name="employee_id">
        </div>

        <input type="submit" value="Search" class="loginBtn" name="search"> 

        <table>
            <tr>
                <th>Email Address</th>
                <th>Password</th>
            </tr>

            <tr>
                <td>
                    <?php
                    $email_address = $result['email'];
                        echo $email_address;
                    ?>
                </td>

                <td>
                    <?php
                    $password = $result['password'];
                        echo $password;
                    ?>
                </td>
            </tr>
        </table>

        <p>Already Have An Account</p><a href="../login.php" class="forgetPassword"><span class="loginLinks">Login Here</span></a>
    </form>
</body>
</html>