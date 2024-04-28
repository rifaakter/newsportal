<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/template.css">
    <title>Document</title>
</head>

<body>

    <div class="template">
        <div class="header">

        </div>
        <div class="menu">
            <?php
            include('../includes/heder.php');
            ?>
        </div>

        <div class="side_bar">
            <?php
            include('../includes/sidbar.php');
            ?>

        </div>

        <div class="content">
            <?php
            include('../includes/contentpage.php');
            include('../includes/contentpage.php');
            ?>
        </div>
        <div class="recent_post">Recrnt Post</div>
        <div class="footer">Footer</div>
    </div>
</body>

</html>