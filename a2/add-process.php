<?php
  include("includes/db_connect.inc");

  //pre($_POST);
  //pre($_FILES);

/* Check if the image uploaded and is an image */  
  if (
    $_FILES['image']['error'] == 0 &&
    substr($_FILES['image']['type'], 0, 6) == "image/" &&
    !empty($_FILES['image']['name'])
  ) {

/* Add country to the database using a prepared statement */
    $sql = "
      INSERT INTO pets (
        petname, description, image, caption, age, location, type
      ) VALUES (
        ?, ?, ?, ?, ?, ?, ?
      )";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param(
        "sssssss",
      $_POST['petname'], 
      $_POST['description'], 
      $_FILES['image']['name'], 
      $_POST['imagecaption'],
      $_POST['age'],
      $_POST['location'],
      $_POST['type']
    );
    $stmt->execute();
    print_r($stmt->error);


    if ($stmt->affected_rows > 0) {
      echo "<p>Pet was added to the database.</p>";
/* ... remove image of same name if it exists ... */  
      $newFilePath = 'images/' . $_FILES['image']['name'];
      
/* ... move image from tmp folder to images folder ... */      
      if (move_uploaded_file($_FILES['image']['tmp_name'], $newFilePath)) {
        echo "<p>File was added to the images directory.</p>";
      } else {
        echo "<p>File was NOT added to the images directory.</p>";
      }    
    } else {
      echo "<p>Pet was not added to the database, image not uploaded.</p>";
    }
  } else {
    echo "<p>There is a problem with the image file.</p>";
  }
  echo "<p>Return to <a href='gallery.php'>pets gallery page</a>.</p>";
?>