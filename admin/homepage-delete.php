<?php
include 'config_homepage.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM images WHERE id=$id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $imagePath = $row['image_path'];

        // Delete image file
        unlink($imagePath);

        // Delete record from database
        $sql = "DELETE FROM images WHERE id=$id";

        if ($conn->query($sql) === TRUE) {
            header("Location: admin_homepage-image.php?deletesuccess");
            exit();
        } else {
            echo "Error deleting record: " . $conn->error;
        }
    } else {
        echo "Record not found!";
    }
}
?>
