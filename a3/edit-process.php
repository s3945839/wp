<?php
  include("includes/db_connect.inc");

  //pre($_POST);
  //pre($_FILES);

/* Check if there is an image uploaded and prepare different statements to handle each case */  
  $sql = '';
  if (
    $_FILES['image']['error'] == 0 &&
    substr($_FILES['image']['type'], 0, 6) == "image/" &&
    !empty($_FILES['image']['name'])
  ) {
    // change / upload a new image
    $sql = "
      UPDATE pets
      SET
        petname = ?,
        description = ?,
        image = ?,
        caption = ?,
        age = ?,
        location = ?,
        type = ?
      WHERE petid = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param(
      "ssssssss",
      $_POST['petname'], 
      $_POST['description'], 
      $_FILES['image']['name'], 
      $_POST['caption'],
      $_POST['age'],
      $_POST['location'],
      $_POST['type'],
      $_POST['petid']
    );
  } else {
    // don't change / upload a new image
    echo "<p>Previous Image Unchanged.</p>";
    $sql = "
      UPDATE pets
      SET
        petname = ?,
        description = ?,
        caption = ?,
        age = ?,
        location = ?,
        type = ?
      WHERE petid = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param(
      "sssssss",
      $_POST['petname'], 
      $_POST['description'], 
      $_POST['caption'],
      $_POST['age'],
      $_POST['location'],
      $_POST['type'],
      $_POST['petid']
    );
  }

/* Update country in the database using a prepared statement */
    
  $stmt->execute();
  print_r($stmt->error);

/* If a country was modified in the database ... */
  if ($stmt->affected_rows > 0) {
    echo "<p>Pet was modified in the database.</p>";

/* ... remove image of same name if it exists ... */      
    if (!empty($_FILES['image']['name']) && file_exists($_FILES['image']['name'])) {
      unlink($_FILES['image']['name']);
    }

/* ... move image from tmp folder to images folder ... */      
    if (!empty($_FILES['image']['name']) && 
        move_uploaded_file($_FILES['image']['tmp_name'], $_FILES['image']['name'])) 
    {
      echo "<p>File was added to the images directory.</p>";
    } 
    else {
      echo "<p>File was NOT added to the images directory.</p>";
    }    
  } 
  else {
    echo "<p>Pet was not editied in the database, image not uploaded.</p>";
  }
  
  echo "<p>Return to <a href='gallery.php'>pets gallery page</a>.</p>";
?>