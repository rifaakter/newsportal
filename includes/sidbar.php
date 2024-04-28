<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sidebar</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />

    <link rel="sidbarmenu" href="../assets/style.css">


    <style>
        .sidebar {
            margin-top: 20px;
            width: auto;


        }

        .item-list {
            list-style: none;
        }

        .item-list li {
            background: #01a365;
            margin-bottom: 5px;
            padding: 1rem 2rem;
            border-radius: 5px;
            color: white;
        }

        .item-list li i {
            padding-right: 10px;

        }

        .item-list li a {

            text-decoration: none;
            color: white;
        }

        .item-list li:hover {
            background: #017247;
            color: white;
            font-size: 18px;
        }
    </style>

</head>

<body>
    <div class="sidebar">
        <ul class="item-list">
            <li><i class="fa-solid fa-gauge"></i><a href="#">Deshbord</a> </li>
            <li><i class="fa-solid fa-upload"></i><a href="../includes/upload.php">Upload</a> </li>
            <li><i class="fa-solid fa-pen"></i></i><a href="#">Edit</a></li>
            <li><i class="fa-solid fa-eye"></i></i> <a href="#">View</a></li>
            <li><i class="fa-solid fa-blog"></i></i> <a href="#">Bloge</a></li>
            <li><i class="fa-solid fa-phone"></i></i> <a href="#">Contact</a></li>
            <li><i class="fa-solid fa-user"></i></i> <a href="#">About</a></li>
            <li><i class="fa-solid fa-gears"></i></i> <a href="#">Settings</a></li>
        </ul>
    </div>
</body>

</html>