 <!-- // connection php code start -->
 <?php

    $hostname = 'localhost';
    $username = 'root';
    $pass = '';
    $db = 'newspaper';


    $conn = mysqli_connect($hostname, $username, $pass, $db);

    // Check connection newspapre
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    ?>
 <!-- // connection php code end -->


 <!-- Registration form php code start -->

 <?php

    include('../controler/db/connection.php');

    // Process registration form
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];

        // Insert user data into the database
        $sql = "INSERT INTO user (username, email, password) VALUES ('$username', '$email', '$password')";

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

 <!-- Registration form php code end -->