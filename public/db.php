<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php    
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'sample';

// Create a MySQLi database connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check the connection
if (!$conn) {
    die('Could not connect to MySQL: ' . mysqli_connect_error());
}
?>
<!-- The rest of your HTML content goes here -->
</body>
</html>
