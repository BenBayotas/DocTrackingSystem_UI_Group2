<?php
// Your existing code...

// Check if the 'delete' button is clicked
if (isset($_POST['delete'])) {
    // Check if the 'file_id' parameter is set in the POST request
    if (isset($_POST['file_id'])) {
        // Get and sanitize the 'file_id' parameter
        $fileId = mysqli_real_escape_string($conn, $_POST['file_id']);

        // SQL to delete the file record
        $deleteSql = "DELETE FROM files WHERE id = '{$fileId}'";

        // Execute the delete query
        if ($conn->query($deleteSql) === TRUE) {
            echo "Successfully deleted the file.";
        } else {
            echo "Error deleting file: " . $conn->error;
        }
    } else {
        echo "No 'file_id' parameter provided for deletion.";
    }
}
?>
