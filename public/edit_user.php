<?php
include_once 'db.php';

// Check if user ID is provided in the URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Retrieve user information from the database
    $query = "SELECT * FROM users WHERE id = $id";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $fname = $row['fname'];
        $lname = $row['lname'];
        $email = $row['email'];
        $password = $row['password'];
        $gender = $row['gender'];
        $active = $row['active']; // Retrieve the current status
    } else {
        echo "User not found.";
        exit();
    }
} else {
    echo "Invalid user ID.";
    exit();
}

if (isset($_POST['submit'])) {
    $newActive = isset($_POST['inactive']) ? 0 : 1;

    // Update the user's status in the database
    $updateQuery = "UPDATE users SET active = $newActive WHERE id = $id";
    $updateResult = mysqli_query($conn, $updateQuery);

    if ($updateResult) {
        // Status updated successfully, redirect back to admin.php
        header("Location: admin.php");
        exit();
    } else {
        echo "Error updating user status: " . mysqli_error($conn);
        exit();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <!-- Include any necessary CSS or JS files -->
</head>
<body>
    <form method="post" action="update_user.php">
        <input type="hidden" name="id" value="<?php echo $id; ?>"> <!-- Add a hidden field to pass the user ID -->

        <label for="fname">First Name:</label>
        <input type="text" name="fname" value="<?php echo $fname; ?>" readonly><br>

        <label for="lname">Last Name:</label>
        <input type="text" name="lname" value="<?php echo $lname; ?>" readonly><br>

        <label for="email">Email:</label>
        <input type="email" name="email" value="<?php echo $email; ?>" readonly><br>

        <label for="password">Password:</label>
        <input type="password" name="password" value="<?php echo $password; ?>" readonly><br>

        <label for="gender">Gender:</label>
        <input type="text" name="gender" value="<?php echo $gender; ?>" readonly><br>

        <label>Status:</label>
        <input type="radio" name="active" value="1" <?php if ($active == 1) echo 'checked'; ?>> Active
        <input type="radio" name="active" value="0" <?php if ($active == 0) echo 'checked'; ?>> Inactive<br>
        
        <input type="submit" name="submit" value="Update">
    </form>

    <a href="admin.php">Back to Users</a>
</body>
</html>
