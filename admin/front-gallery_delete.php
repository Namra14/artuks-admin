<?php
include 'config_newxgallery.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM front_gallery WHERE id=$id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $frontgalleryImage = $row['frontgallery_image'];

        // Delete image file
        unlink($designImage);

        // Delete record from database
        $sql = "DELETE FROM front_gallery WHERE id=$id";

        if ($conn->query($sql) === TRUE) {
            header("Location: admin_front-gallery.php?deletesuccess");
            exit();
        } else {
            echo "Error deleting record: " . $conn->error;
        }
    } else {
        echo "Record not found!";
    }
}
?>
