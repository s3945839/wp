<?php
include('includes/header.inc');


if (!empty($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "select * from pets where petid=?";
    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        exit("prepare failed: " . $conn->error);
    }
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $records = $stmt->get_result();
    if ($records->num_rows > 0) {
        foreach ($records as $row) {
            echo "<div class='details'>";
            echo "<h2>Are you sure you want to delete this record?</h2>";
            echo "<h3>{$row['petname']}</h3>";
            echo "<p>{$row['description']}</p>";
            echo "<img src='images/{$row['image']}' alt='{$row['caption']}' class='delete-img'>";
            echo "<p class='confirm'>";
            echo "<a href='gallery.php'  class='btn btn-primary'>Cancel</a>";
            // encode url to make html valid
            $imagename = urldecode("images/{$row['image']}");
            echo "<a href='delete-process.php?id={$row['petid']}' class='btn btn-danger'>Delete</a>";
            echo "</p>";
            echo '</div>';
        }
    }
}
include('includes/footer.inc');
