<?php
 include ("includes/header.inc");

$s1 = "'%";
$s2 = "%'";
$p1 = $s1 . $_POST['searchkey'] .$s2;
$p2 = "'" . $_POST['pettype'] ."'";



   
if (empty ($_POST['pettype']) ) {
    $sql = "SELECT * FROM pets WHERE (petname LIKE " . $p1 . " or description LIKE " . $p1 . ")"; 
}
else {
    $sql = "SELECT * FROM pets WHERE (petname LIKE " . $p1 . " or description LIKE " . $p1 . ") and type = " . $p2;
}



$pets = mysqli_query($conn, $sql);


 ?>
     <main>
                
             <div class="row">
                <div class="col-md-12">
                    <?php
                    while($row = mysqli_fetch_assoc($pets)) {
                    //pre($row);
                        echo <<<"CDATA"
                        <div class="gallery-page-image-container">
                        <a href='details.php?id={$row['petid']}'>
                        <img src="images/{$row['image']}" alt="icon" class="gallery-page-image">
                        <div class="gallery-page-image-discovermore">
                            <span class="material-symbols-outlined">
                                search
                            </span><br>
                            Discover More!
                        </div>
                        <div class="gallery-page-image-name">{$row['petname']}</div>
                        </a>
                    </div>

                CDATA;
                    }
                    ?>

                </div>
             </div>
        </main>

        <?php
 include ("includes/footer.inc");?>
      