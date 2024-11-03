<?php
 include ("includes/header.inc");

$userid = $_GET['id'];
$username = $_GET['name'];

$sql = "SELECT * FROM pets WHERE userID = " . $userid;


$pets = mysqli_query($conn, $sql);
 ?>
     <main>
                
             <div class="row">
                <div class="col-md-12">
                    <h4> <?php echo $username ?>'s Collection </h4>
                    
                    <?php
                    $petid = null;
                    while($row = mysqli_fetch_assoc($pets)) {
                    $petid=$row['petid'];
                    //pre($row);
                    echo <<<"CDATA"
                    <div class="container">
                        <div class="row">
                        <div class="col-md-4">
                            <div class="detail-page-image-outer">
                            <figure>
                                <img src="images/{$row['image']}" alt="{$row['caption']}">
                                <figcaption>{$row['caption']}</figcaption>
                            </figure>
                            </div>
                        </div>
                    
                        <div class="col-md-8">
                            <h3 class= "detail-page-petname">{$row['petname']}</h3>
                            <p class = "detail-page-description">{$row['description']}</p>  
                        </div>
                        </div>   

                    <div class="row">
                        <div class="col-md-1">
                        <div >
                            <span class="material-symbols-outlined">
                            alarm
                            </span>
                            <p class="age">{$row['age']}</p>
                        </div>
                        </div>

                        <div class="col-md-1">
                        <div >
                            <span class="material-symbols-outlined">
                            pets
                            </span>
                            <p class="type">{$row['type']}</p>
                        </div>
                        </div>

                        <div class="col-md-10">
                        <div >
                            <span class="material-symbols-outlined">
                            location_on
                            </span>
                            <p class="location">{$row['location']}</p>
                        </div>
                        </div> 
                    </div>

                    </div>                     
              
                    CDATA;    
      
                    
                    if (IsSet($_SESSION['userID']) && $userid == $_SESSION['userID']) {   
                        echo '<div class="row">';
                        echo '<div class="col-md-12">';
                        echo     '<a class="btn btn-primary" href="edit.php?id='; 
                        echo $petid; 
                        echo '">Edit</a>';

                        echo '<a class="btn btn-danger" href="delete.php?id=';
                        echo $petid;
                        echo '">Delete</a>';
                        echo '</div>';
                        echo '</div>';      
                    } 
                    }

                      
                    ?>
                      

                </div>

                

             </div>


                

        </main>

   <?php
 include ("includes/footer.inc");?>
