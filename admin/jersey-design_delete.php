<?php
include 'config_newxgallery.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM jersey_design WHERE id=$id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $jerseyImage = $row['jersey_image'];

        // Delete image file
        unlink($jerseyImage);

        // Delete record from database
        $sql = "DELETE FROM jersey_design WHERE id=$id";

        if ($conn->query($sql) === TRUE) {
            header("Location: jersey-design.php?deletesuccess");
            exit();
        } else {
            echo "Error deleting record: " . $conn->error;
        }
    } else {
        echo "Record not found!";
    }
}
?>
