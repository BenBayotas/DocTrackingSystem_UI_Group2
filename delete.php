<?php
if (isset($_POST['delete'])) {
    // Check if 'file_id' params is set in POST req
    if (isset($_POST['file_id'])) {
        // Get and sanitize the 'file_id' parameter
        $fileId = mysqli_real_escape_string($conn, $_POST['file_id']);

        // SQL to delete file
        $deleteSql = "DELETE FROM files WHERE id = '{$fileId}'";

        // Exec delete query
        if ($conn->query($deleteSql) === TRUE) {
            echo  '<script>alert("File has been Deleted")</script>';
        } else {
            echo '<script>alert("Error Deleting file")</script>' . $conn->error;
        }
    } else {
        echo '<script>alert("File not found")</script>';
    }
}
?>