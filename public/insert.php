<?php

include_once 'db.php';

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $location = $_POST['location'];
    $ootd = $_POST['ootd'];

    $sql = "INSERT INTO activity (name, date, time, location, ootd)     
            VALUES ('$name', '$date', '$time', '$location', '$ootd')";

    if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully!";
        mysqli_close($conn);

        header("Location: user.php");
        exit();
    } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
    }
}
?>
