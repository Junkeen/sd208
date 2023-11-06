<?php
session_start();
include_once 'db.php'; // Include your database connection code

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $announcement = $_POST["announcement"];
    $expirationDate = date('Y-m-d H:i:s', strtotime('+7 days')); // Set expiration date to 7 days from now

    // Store the announcement and expiration date in the database
    $insertQuery = "INSERT INTO announcements (announcement, expiration_date) VALUES (?, ?)";
    $stmt = mysqli_prepare($conn, $insertQuery);
    mysqli_stmt_bind_param($stmt, "ss", $announcement, $expirationDate);
    $result = mysqli_stmt_execute($stmt);

    if ($result) {
        // Redirect back to admin.php or any other page as needed
        header("Location: admin.php");
        exit();
    } else {
        echo "Error storing announcement: " . mysqli_error($conn);
    }
}
?>
