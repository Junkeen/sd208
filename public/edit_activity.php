<?php
include_once 'db.php';

if(isset($_GET['id'])) {
    $user_id = $_GET['id'];
    
    $query = "SELECT * FROM activity WHERE id = $user_id";
    $result = mysqli_query($conn, $query);
    
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
    } else {
        echo "Activity not found.";
        exit;
    }
} else {
    echo "Invalid request.";
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <style>
          body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        form {
            max-width: 400px;
            margin: 20 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        h2 {
            text-align: center;
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 3px;
            font-size: 16px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
<form method="post" action="update_activity.php" onsubmit="return confirm('Are you sure you want to save changes you made?');">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    Name: <input type="text" name="name" value="<?php echo $row['name']; ?>"><br>
    Date: <input type="date" name="date" value="<?php echo $row['date']; ?>"><br>
    Time: <input type="time" name="time" value="<?php echo $row['time']; ?>"><br>
    Location: <input type="text" name="location" value="<?php echo $row['location']; ?>"><br>
    Ootd: <input type="text" name="ootd" value="<?php echo $row['ootd']; ?>"><br>

   

    <input type="submit" name="submit" value="Save">
</form>

</body>
</html>
