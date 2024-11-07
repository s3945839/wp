<?php
  include("includes/db_connect.inc");



  $sqlNoWait = "SELECT image FROM pets WHERE petid = ?";
  $stmt = $conn->prepare($sqlNoWait);
  $stmt->bind_param("s", $_GET['id']);
  $stmt->execute();

  $result = $stmt->get_result();
  $row = $result->fetch_assoc();
  $imageToDelete = $row['image']; 


  $sql = "DELETE FROM pets WHERE petid = ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param(
    "s",
    $_GET['id']
  );
  
/* Delete pet in the database using a prepared statement */
    
  $stmt->execute();
  print_r($stmt->error);

/* If a pet was deleted in the database ... */
  if ($stmt->affected_rows > 0) {
    echo "<p>Pet was deleted in the database.</p>";
/* ... remove image of same name if it exists ... */      
    if (file_exists('images/' . $imageToDelete)) {
      unlink('images/' . $imageToDelete);
      echo "<p>Pet image file was deleted in the folder.</p>";
    }    
  } 
  else 
  {
    echo "<p>Pet was not deleted in the database, image not removed.</p>";
  }
  
  echo "<p>Return to <a href='gallery.php'>pets gallery page</a>.</p>";
?>