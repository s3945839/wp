<?php
$title = "Login";
include('includes/header.inc');
?>
<h1>Login page</h1>
 <?php 
 if (!empty($_SESSION['username'])) { 
        echo "<p>";
        echo $_SESSION['username'];
        echo ", you are logged in!</p>"; 
    } else { 
        echo <<< "CDATA"
                <form action="process_login.php" method="post">
                    <label for="username">username</label>
                    <input type="text" name="username" id="username"><br><br>
                    <label for="password">password</label>
                    <input type="password" name="password" id="password"><br><br>
                    <input type="submit" value="Login">
                </form>
            CDATA;
    }
?>
<?php
include('includes/footer.inc');
?>