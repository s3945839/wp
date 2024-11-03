<?php 
  include("includes/header.inc"); 


  $sql = "select * from pets where petid = ?";

  $stmt = $conn->prepare($sql);
  $petid = $_GET['id'];
  $stmt->bind_param("i", $petid);
  $stmt->execute();
  // print_r($stmt->error);

  $result = $stmt->get_result();
?>
 
<div >
<?php
  $userid = null;

  while($row = $result->fetch_assoc()) {
    $userid = $row ['userID']; 
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
  }
?>

<?php
  if (IsSet($_SESSION['userID']) && $userid == $_SESSION['userID']) {   ?>
    <div class="row">
      <div class="col-md-12">
        <a class="btn btn-primary" href="edit.php?id=<?php echo $petid?>">Edit</a>
        <a class="btn btn-danger" href="delete.php?id=<?php echo $petid?>">Delete</a>
      </div>
    </div>             
  <?php } ?>

</div>

<?php 
include("includes/footer.inc"); 
?>