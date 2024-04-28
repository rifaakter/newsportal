<?php
include('./controler/db/connection.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" > -->

    <link rel="stylesheet" href="./assets/style.css">
    <title>News Portal</title>
</head>

<body>

    <nav class="nav--menu">
        <?php
        include('./includes/heder.php');
        ?>
    </nav>

    <!-- content page load -->

    <?php
    include('./includes/contentpage.php');
    ?>




    <br>
    <br><br><br><br><br><br>

    <!-- footer section -->
    <?php
    include('./includes/footer.php')
    ?>
    <!-- java script include cnd link -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" ></script> -->


    <script src="./assets/scripet.js"></script>

</body>

</html>