<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>

    <link rel="stylesheet" href="../assets/login_regis.css">

</head>

<body>


    <div class="login--container">

        <h4>Login</h4>



        <form action="" method="post" class="login-from">
            <div class="fromspace">
                <!-- <label for="username">User Name</label> <br> -->
                <input type="text" name="username" placeholder="Enter Your User Name" required class="input--fild">
                <!-- <label for="password">Password</label><br> -->
                <input type="password" name="password" placeholder="Enter Your User Password" required class="input--fild">
                <p>Don't have an account? <a href="../includes/regitration.php">Join</a></p>
                <input type="submit" value="login" class="input--fild" id="submit-btn">

            </div>
        </form>

        <?php

        include('../controler/db/connection.php');

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $username = $_POST["username"];
            $password = $_POST["password"];

            $sql = "SELECT * FROM users WHERE username ='$username' AND password = '$password'";

            $result = mysqli_query($conn, $sql);

            if ($result && mysqli_num_rows($result) > 0) {
                // Fetching the row
                $row = mysqli_fetch_array($result);

                // Check user type
                if ($row["user_type"] == "admin") {
                    echo '<script>
                
                window.location.href = "../includes/Admin_page.php";
                alert("Admin Login successfull..");
                
             </script>';
                } elseif ($row["user_type"] == "user") {
                    echo '<script>
                
                window.location.href = "../index.php";
                alert("User Login successfull..");
                
             </script>';
                }
            } else {
                // No matching records found
                echo "Invalid username or password.";
            }
        }
        ?>




    </div>
</body>

</html>