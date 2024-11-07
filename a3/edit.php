<?php 
  include("includes/header.inc");   

  $sql = "select * from pets where petid = ?";

  $stmt = $conn->prepare($sql);
  $stmt->bind_param("i", $_GET['id']);
  $stmt->execute();
  // print_r($stmt->error);

  $result = $stmt->get_result();
  $row = $result->fetch_assoc();

  
  $title = "Edit " . $row['petname'];

?>


<form method="post" action="edit-process.php" enctype="multipart/form-data">
  <fieldset>
    <legend>Edit Details</legend>
    <input type="hidden" name="petid" id="petid" value="<?= $row['petid'] ?>">
    <p><label for="petname">Pet Name</label><br>
    <input type="text" name="petname" id="petname" value="<?= $row['petname'] ?>"></p>
    <p><label for="description">Pet Description</label><br>
    <textarea name="description" id="description"><?= $row['description'] ?></textarea></p>
    <p><label for="image">Pet Image</label><br>
    <input type="file" name="image" id="image"> <span>Currently <?= $row['image'] ?> <img src="<?= 'images/'.$row['image'] ?>" alt="" ></span></p>
    <p><label for="caption">Image Caption</label><br>
    <input type="text" name="caption" id="caption" value="<?= $row['caption'] ?>"></p>
    <p><label for="caption">Pet Age</label><br>
    <input type="text" name="age" id="age" value="<?= $row['age'] ?>"></p>
    <p><label for="caption">Pet Location</label><br>
     <input type="text" name="location" id="location" value="<?= $row['location'] ?>"></p>
    <p><label for="caption">Pet Type</label><br>
     <input type="text" name="type" id="type" value="<?= $row['type'] ?>"></p>
    <p><button type="submit">Update Pet</button></p>
  </fieldset>
</form>




<?php include("includes/footer.inc"); ?>