<?php include 'fp-config.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $title ?></title>
    <link rel="stylesheet" href="style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Abhaya+Libre:wght@800&family=Barlow+Condensed&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>

<body>
    <header class="top-header">
        <nav id="nav">
            <div class="logo">
                <a href="index.php">
                    <img class="nav-logo" src="images/logo.png" alt="green dog oasis logo" />
                </a>
            </div>

            <ul class="nav-menu">

                <?= makeLinks($nav1) ?>
                <!-- <li class="nav-item">
                    <a class="nav-link" href="#">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Get Involved</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Donate</a>
                </li> -->
            </ul>

            <div class="hamburger">
                <span class="bar"></span>

                <span class="bar"></span>

                <span class="bar"></span>
            </div>
        </nav>
    </header>