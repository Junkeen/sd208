<?php
include_once 'db.php';

if(isset($_GET['id'])) {
    $id = $_GET['id']; // Change variable name to $id
    
    $query = "DELETE FROM activity WHERE id = $id";
    
    if(mysqli_query($conn, $query)) {
        echo "Activity deleted successfully!";
        header("Location: user.php");
        exit();
    } else {
        echo "Error deleting user: " . mysqli_error($conn);
    }
}
?>