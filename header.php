<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="./style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />

    <!-- bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- custome style  -->
    <link rel="stylesheet" href="./hacking.css">
    <title>968 HACK - <?php echo $title ?? "Document" ?></title>
</head>

<body>
<nav>
        <input type="checkbox" id="click">
        <label for="click" class="menu-btn">
            <i class="fas fa-bars"></i>
        </label>
        <ul>
            <li><a href="./index.php" class="<?php echo $page == "home" ? "active" : null ?>">Home</a></li>
            <li><a href="./gallery.php" class="<?php echo $page == "gallery" ? "active" : null ?>">Gallery</a></li>
            <li><a href="./about.php" class="<?php echo $page == "about" ? "active" : null ?>">About</a></li>
            <li><a href="./hacking.php" class="<?php echo $page == "hacking" ? "active" : null ?>">Hacking</a></li>
        </ul>
    </nav>