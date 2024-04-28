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

        <h4>Registration Form</h4>



        <form action="" method="post" class="login-from">
            <div class="fromspace">
                <!-- <label for="username">User Name</label> <br> -->
                <input type="text" name="username" placeholder="Enter Your User Name" class="input--fild" required>
                <input type="email" name="email" placeholder="Enter Your email" class="input--fild" required>
                <!-- <label for="password">Password</label><br> -->
                <input type="password" name="password" placeholder="Enter Your User Password" class="input--fild" required>
                <p>Alrady have an account? <a href="../includes/login.php">login</a></p>
                <input type="submit" value="Join Now" class="input--fild" id="submit-btn">

            </div>
        </form>


        <!-- DATA INSERT CONNECTION  -->

        <?php

        include('../controler/db/connection.php');



        // Process registration form
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST["username"];
            $email = $_POST["email"];
            $password = $_POST["password"];

            // Insert user data into the database
            $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";

            if (mysqli_query($conn, $sql)) {

                echo '<script>
                alert("Registration successfull..");
                window.location.href = "http://localhost/newspaper/includes/login.php";
                
             </script>';
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        }



        ?>


    </div>
</body>

</html>