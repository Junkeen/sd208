<?php
session_start();

$SessionID = session_id();

if($SessionID != $_SESSION ["currentSessionID"])
{
    header('Location: login.html');
}


?>


<span style = "float: right"><a href="logout.php">Logout</a></span>
<br>
<h1>Hello <?=$_SESSION["user_fname"]?></h1>
<br>
<?php
session_start();

$SessionID = session_id();

if($SessionID != $_SESSION["currentSessionID"])
{
    header('Location: login.html');
}


?>

<?php
session_start();
include_once 'db.php'; // Include your database connection code

?>

s
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>WebDev3 User Page</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../src/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../src/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../src/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../src/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../src/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../src/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../src/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="../src/assets/vendor1/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../src/assets/vendor1/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../src/assets/vendor1/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../src/assets/vendor1/quill/quill.snow.css" rel="stylesheet">
  <link href="../src/assets/vendor1/quill/quill.bubble.css" rel="stylesheet">
  <link href="../src/assets/vendor1/remixicon/remixicon.css" rel="stylesheet">
  <link href="../src/assets/vendor1/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../src/assets/css/style.css" rel="stylesheet">
  <link href="../src/assets/css/style1.css" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <style> 
  /* Apply a basic style to the form container */
#form {
  background-color: #fff;
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
}

/* Style the form title */
h4 {
  font-size: 24px;
  color: #333;
  margin-bottom: 10px;
}

/* Style the form description */
p {
  color: #777;
  font-size: 14px;
}

/* Style the input field with white background inside */
input[type="announcement"] {
  width: 100%;
  padding: 10px;
  margin-bottom: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  outline: none;
  background-color: white; /* Set the background color to white */
}



/* Style the submit button */
input[type="submit"] {
  background-color: #007bff;
  color: #fff;
  border: none;
  padding: 10px 20px;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.3s;
}

/* Change button color on hover */
input[type="submit"]:hover {
  background-color: #0056b3;
}

/* Center the form horizontally */
.col-lg-6 {
  text-align: center;
}

th, td {
  border: 1px solid #ddd;
  padding: 12px;
  text-align: center;
}

th {
  background-color: #91C8E4;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}

a {
  text-decoration: none;
  color: #007bff;
  transition: color 0.3s ease-in-out;
}

a:hover {
  color: #0056b3;
}

.action-buttons {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.edit-button,
.delete-button {
  padding: 6px 10px;
  border: none;
  cursor: pointer;
  transition: background-color 0.3s ease-in-out;
  font-size: 14px;
}

.edit-button {
  background-color: #007bff;
  color: #fff;
}

.edit-button:hover {
  background-color: #0056b3;
}

.delete-button {
  background-color: #dc3545;
  color: #fff;
}

.delete-button:hover {
  background-color: #c82333;
}

.edit-icon {
  color: #007bff; 
}

.add-icon {
  color: #28a745; 
}

.delete-icon {
  color: #dc3545; 
}


        table {
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            color: black; /* Set the text color to black */
        }
        #header.fixed-top {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    background-color: #2389cd; /* You can set the background color as needed */
    z-index: 1000; /* Adjust the z-index to ensure it appears above other elements */
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Optional shadow for a more visual distinction */
}

</style>
 
</head>
















<body>

 <!-- ======= Header ======= -->
 <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
        <h1 class="logo me-auto"><a href="logout.php">User Page</a></h1>
        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="getstarted scrollto" href="logout.php">Log Out</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
    </div>
</header><!-- End Header -->











<!-- main container -->
            <div class="container mt-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Your Information</h5>







<!-- Input Table-->
<div class="container mt-4">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Announcement From Admin</h5>
            <?php
            // Retrieve announcements that are not expired
            $currentDate = date('Y-m-d H:i:s');
            $selectQuery = "SELECT * FROM announcements WHERE expiration_date > '$currentDate'";
            $result = mysqli_query($conn, $selectQuery);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<p><strong>Date:</strong> " . $row["announcement_date"] . "</p>";
                    echo "<p><strong>Announcement:</strong> " . $row["announcement"] . "</p>";
                }
            } else {
                echo "<p>No announcement available.</p>";
            }
            ?>
        </div>
    </div>
</div>
<!-- Input Table-->
























<!-- Input Table-->
<div class="container mt-4">
  
<body>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Set Your Activity</h5>
                <canvas id="pieChart" style="max-height: 400px;"></canvas>
                
                <form method="post" action="insert.php">
                      Name: <input type="text" name="name" required><br>
                      Date: <input type="date" name="date" required><br>
                     Time: <input type="time" name="time" required><br>
                      Location: <input type="text" name="location" required><br>
                      OOTD: <input type="text" name="ootd" required><br>
        <input type="submit" name="submit" value="Register">
    </form>
    
    </div>

        </div>
    </div>
</div>
<!--  Input Table-->

      



<!-- Activity Table -->
<div class="container mt-4">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Activity Information</h5>
            <canvas id="pieChart" style="max-height: 400px;"></canvas>

            <div class="table-container">
                <?php
                include_once 'db.php';

                $query = "SELECT * FROM activity ORDER BY date ASC";
                $result = mysqli_query($conn, $query);

                if ($result) {
                    echo "<table>";
                    echo "<tr><th>ID</th><th>Name</th><th>Date</th><th>Time</th><th>Location</th><th>Ootd</th><th>Status</th><th></th><th></th><th></th></tr>";

                    while ($row = mysqli_fetch_assoc($result)) {
                      echo "<tr>";
                      echo "<td>{$row['id']}</td>";
                      echo "<td>{$row['name']}</td>";
                      echo "<td>{$row['date']}</td>";
                      echo "<td>{$row['time']}</td>";
                      echo "<td>{$row['location']}</td>";
                      echo "<td>{$row['ootd']}</td>";

                      echo "<td>";
                      
                      // Add radio buttons for status (Cancel and Done)
                      echo "<form action='update_activity.php' method='post'>";
                      echo "<input type='hidden' name='id' value='{$row['id']}'>";
                      
                      echo "<label><input type='radio' name='status' value='Cancel' ";
                      if ($row['status'] === 'Cancel') echo 'checked';
                      echo "> Cancel</label>";
                      
                      echo "<label><input type='radio' name='status' value='Done' ";
                      if ($row['status'] === 'Done') echo 'checked';
                      echo "> Done</label>";
                      
                     
                      echo "<button type='submit'>Update</button>";
                      echo "</form>";
                      
                      echo "</td>";
                      
                      echo "<td><a href='edit_activity.php?id={$row['id']}'><i class='fas fa-edit edit-icon'></i> Edit</a></td>";
                      echo "<td><a href='user.php?id={$row['id']}'><i class='fas fa-plus add-icon'></i> Add</a></td>";
                  



                      echo "</tr>";
                      
                    }

                    echo "</table>";
                } else {
                    echo "Error: " . mysqli_error($conn);
                }

                mysqli_close($conn);
                ?>
            </div>
        </div>
    </div>
</div>


  <!-- ======= Footer ======= -->
  <footer id="footer">

   

    <div class="footer-top">
      <div class="container">
        <div class="row">

          

        </div>
      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>Junkeen</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->

      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../src/assets/vendor/aos/aos.js"></script>
  <script src="../src/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../src/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../src/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../src/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../src/assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="../src/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../src/assets/js/main.js"></script>

  <!-- Vendor JS Files -->
  <script src="../src/assets/vendor1/apexcharts/apexcharts.min.js"></script>
  <script src="../src/assets/vendor1/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../src/assets/vendor1/chart.js/chart.umd.js"></script>
  <script src="../src/assets/vendor1/echarts/echarts.min.js"></script>
  <script src="../src/assets/vendor1/quill/quill.min.js"></script>
  <script src="../src/assets/vendor1/simple-datatables/simple-datatables.js"></script>
  <script src="../src/assets/vendor1/tinymce/tinymce.min.js"></script>
  <script src="../src/assets/vendor1/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../src/assets/js/main1.js"></script>

</body>

</html>