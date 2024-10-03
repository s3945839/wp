<?php 
  include("includes/db_connect.inc"); 
  include("includes/header.inc"); 


  $sql = "select * from pets where petid = ?";

  $stmt = $conn->prepare($sql);
  $stmt->bind_param("i", $_GET['id']);
  $stmt->execute();
  // print_r($stmt->error);

  $result = $stmt->get_result();
?>

<div id="gallery">
<?php
  while($row = $result->fetch_assoc()) {
    //pre($row);
    echo <<<"CDATA"
    <div class="gallery-item">

      <div class="detail-page-image-outer">
        <figure>
          <img src="images/{$row['image']}" alt="{$row['caption']}">
          <figcaption>{$row['caption']}</figcaption>
        </figure>
      </div>

      <div class="detail-page-age">
        <span class="material-symbols-outlined">
        alarm
        </span>
        <p class="age">{$row['age']}</p>
      </div>

      <div class ="detail-page-type">
        <span class="material-symbols-outlined">
        pets
        </span>
        <p class="type">{$row['type']}</p>
      </div>

      <div class = "detail-page-location">
        <span class="material-symbols-outlined">
        location_on
        </span>
        <p class="location">{$row['location']}</p>
      </div>

      <h3 class= "detail-page-petname">{$row['petname']}</h3>
      <p class = "detail-page-description">{$row['description']}</p>   
    </div>

CDATA;      
  }
?>
</div>

<?php 
include("includes/footer.inc"); 
?>