<?php
 include("includes/db_connect.inc"); 
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Pets</title>
    <meta charset=utf-8>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/style.css">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">        
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Permanent%20Marker' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Poetsen%20One' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Ysabeau%20SC' rel='stylesheet'>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
</head>

<body class="container">
    <header class="container">
        <div class="row">
            <div class="col-md-1 align-bottom">
                <img src="images/logo.png" alt="pawprint">
            </div>
            <div class="col-md-8 align-bottom">
                <nav class="navbar navbar-expand-sm">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pets.php">Pets</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="gallery.php">Gallery</a>
                        </li>
                        <?php if (!isset($_SESSION['username'])) {  ?>
                            <li class="nav-item">
                                <a class="nav-link" href="register.php" >Registration</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="login.php" >Login</a>
                            </li>
                        <?php } ?>
                        <?php if (!empty($_SESSION['username'])) { ?>                            
                            <li class="nav-item">
                                <a class="nav-link" href="add.php">Add More</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="logout.php" >Logout</a>
                            </li>
                        <?php } ?>                        
                    </ul>
                </nav>
            </div>
            <div class="col-md-3 align-bottom">
                <div class="search-container">
                    <form id="form" role="search">
                        <input type="search" id="query" name="q" placeholder="Search..."
                            aria-label="Search through site content">
                        <span class="material-symbols-outlined">
                            search
                        </span>
                    </form>
                </div>                
            </div>
        </div>
    </header>
    <div id=wrapper>
        
           
            
            
                
        