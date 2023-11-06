<?php
include_once 'db.php';

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $active = isset($_POST['active']) ? $_POST['active'] : 0;

    // Update the user's active status in the database using prepared statements
    $query = "UPDATE users SET active = ? WHERE id = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "ii", $active, $id);
    $result = mysqli_stmt_execute($stmt);

    if ($result) {
        // Successful update, redirect to view_users.php
        header("Location: admin.php");
        exit();
    } else {
        echo "Error updating user: " . mysqli_error($conn);
    }
}

?>
<a href="admin.php">Back to Users</a>
