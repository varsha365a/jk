<?php
// Include database connection
include('dbcon.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Perform soft delete by updating is_deleted column
    $query = "UPDATE contact SET is_deleted = 1 WHERE id = ?";
    $stmt = mysqli_prepare($connection, $query);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, 'i', $id);
        mysqli_stmt_execute($stmt);
        
        // Redirect back to index.php with a delete confirmation message
        header('Location: index2.php?delete_msg=Record has been deleted.');
        exit;
    } else {
        die("Prepared statement failed: " . mysqli_error($connection));
    }
} else {
    // Redirect if id parameter is not provided
    header('Location: index2.php');
    exit;
}
?>