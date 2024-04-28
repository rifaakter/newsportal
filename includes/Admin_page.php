<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/template.css">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
</head>

<body>

    <div class="template">

        <!-- header serction -->
        <div class="header">
            <?php
            include('../includes/heder.php');
            ?>
        </div>
        <!-- menu section -->
        <div class="menu">


        </div>

        <!-- side menu bar -->
        <div class="side_bar">
            <?php
            include('../includes/sidbar.php');
            ?>

        </div>
        <!-- contant panel -->
        <div class="content">
            <?php
            include('../includes/contentpage.php');
            include('../includes/contentpage.php');
            ?>
        </div>
        <!-- resent post section -->
        <div class="recent_post">Recrnt Post</div>
        <!-- footer section -->
        <div class="footer">
            <?php
            include('../includes/footer.php');
            ?>
        </div>
    </div>
</body>