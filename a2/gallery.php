 <?php
 include("includes/db_connect.inc"); 
 include ("includes/header.inc");
 $pets = mysqli_query($conn, "select * from pets");
 
 ?>
     <main>
            <h2 class="gallery-page-title">Pets Victoria has a lot to offer</h2>
            <p>For almost two decades, Pets Victoria has helped in creating true social change by bringing pet adoption
                into the mainstream.
                Our work has helped make a difference to the Victorian rescue community and thousands of pets in need of
                rescue and rehabilitation.
                But, until every pet is safe, respected, and loved, we all still have, hairy work to do.
            </p>

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
        </main>

        <?php
 include ("includes/footer.inc");?>
      