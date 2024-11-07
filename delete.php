<?php
include('includes/db.php');

// Check if the record ID is provided in the query string
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Delete the record
    $sql = "DELETE FROM scp_entries WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "<div class='alert alert-success'>SCP Record Deleted Successfully!</div>";
    } else {
        echo "<div class='alert alert-danger'>Error: " . $conn->error . "</div>";
    }
}

$conn->close();

// Redirect back to the main page
header("Location: index.php");
exit;
?>
