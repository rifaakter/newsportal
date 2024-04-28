 <?php

    include('../controler/db/connection.php');



    // Process registration form
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];

        // Insert user data into the database
        $sql = "INSERT INTO user (username, email, password,$user_type) VALUES ('$username', '$email', '$password','user')";

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


