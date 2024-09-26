<!DOCTYPE html>
<html lang="en">

<head>
    <title>Pets</title>
    <meta charset=utf-8>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/main.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Permanent%20Marker' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Poetsen%20One' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Ysabeau%20SC' rel='stylesheet'>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
</head>

<body>
    <div id=wrapper>
        <header>
            <img src="images/logo.png" alt="pawprint">
            <?php include ("includes/nav.inc");?>
            <div class="search-container">
                <form id="form" role="search">
                    <input type="search" id="query" name="q" placeholder="Search..."
                        aria-label="Search through site content">
                    <span class="material-symbols-outlined">
                        search
                    </span>
                </form>

            </div>
        </header>