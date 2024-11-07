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
                                <a class="nav-link" href="logout.php" >Logout</a> <?php  echo $_SESSION['username'];?>
                            </li>
                        <?php } ?>                        
                    </ul>
                </nav>