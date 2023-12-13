<?php
include 'filesLogic.php';
include 'delete.php';

// Check if search form is submitted
if (isset($_GET['searchBtn'])) {
    $searchTerm = $_GET['search'];

    // Modify your file fetching logic to include the search term
    $files = searchFiles($searchTerm);
} else {
    // If the search form is not submitted, fetch all files as usual
    $files = getFiles();
}
?>