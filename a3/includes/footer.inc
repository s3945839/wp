  <?php
  $pets= mysqli_query($conn, "SELECT DISTINCT u.userID, username from users u Join pets p on u.userID=p.userID");
 ?>
   

  <footer>
    <div class="row">
        <div class="col-md-12">
            <nav class="navbar navbar-expand-sm justify-content-center">
                    <ul class="navbar-nav">
                        <?php
                        while($row = mysqli_fetch_assoc($pets)) {
                            echo "
                            <li class='nav-item'>
                                <a class='nav-link' href='user.php?id={$row['userID']}&name={$row['username']}'>{$row['username']}</a>
                            </li>
                            ";
                        }
                        ?>        
                    </ul>
                </nav>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-12">
            <p  class="text-center">© copyright s3945839. All Rights Reserved Designed for Pets Victoria</p>
        </div>
    </div>
            
  </footer>
  

</body>
