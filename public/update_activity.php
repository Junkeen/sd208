<?php
include_once 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $activity_id = $_POST['id'];
    $new_name = $_POST['name'];
    $new_date = $_POST['date'];
    $new_time = $_POST['time'];
    $new_location = $_POST['location'];
    $new_ootd = $_POST['ootd'];
    
    // Get the new status from the form
    $new_status = $_POST['status'];
    
    if ($new_status === 'Cancel' || $new_status === 'Done') {
        // Delete the activity if the status is 'Cancel' or 'Done'
        $delete_query = "DELETE FROM activity WHERE id=$activity_id";
        $delete_result = mysqli_query($conn, $delete_query);
        
        if ($delete_result) {
            // Successful delete, redirect to the activity page
            header("Location: user.php");
        } else {
            echo "Error deleting activity: " . mysqli_error($conn);
        }
    } else {
        // Perform the SQL update query for basic information and status
        $query = "UPDATE activity SET 
                  name='$new_name', 
                  date='$new_date', 
                  time='$new_time', 
                  location='$new_location', 
                  ootd='$new_ootd', 
                  status='$new_status'
                  WHERE id=$activity_id";
        
        $result = mysqli_query($conn, $query);
        
        if ($result) {
            // Successful update, redirect to the activity page
            header("Location: user.php");
        } else {
            echo "Error updating activity: " . mysqli_error($conn);
        }
    }
}

mysqli_close($conn);
?>
