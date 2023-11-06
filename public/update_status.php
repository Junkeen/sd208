<?php
include_once 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $activity_id = $_POST['activity_id'];
    $new_status = $_POST['status'];

    // Perform the SQL update query
    $query = "UPDATE activity SET status='$new_status' WHERE id=$activity_id";
    $result = mysqli_query($conn, $query);

    if ($result) {
        // Redirect back to user.php or display a success message
        header("Location: user.php");
    } else {
        echo "Error updating activity status: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
