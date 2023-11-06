<?php
session_start();

$SessionID = session_id();

if($SessionID != $_SESSION["currentSessionID"])
{
    header('Location: login.html');
}


?>

<br>
<h1>Hello <?=$_SESSION["user_fname"]?></h1>
<br>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>WebDev3 Admin Page</title>
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

  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

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
.placeholder{
  Color: #fff;
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
        <h1 class="logo me-auto"><a href="logout.php">Admin Page</a></h1>
        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="getstarted scrollto" href="logout.php">Log Out</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
    </div>
</header><!-- End Header -->












<!-- For the Announcement -->


    <!-- admin.php -->
    <form id="form" method="post" action="process_announcement.php">
    <div class="form-newsletter">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h4>Make an Announcement</h4>
                    <p>You make the Announcement because you are the Admin!!!</p>
                    <input type="text" name="announcement" placeholder="Enter your announcement" required style="background-color: #37517e  ;">
                    <input type="submit" value="Send">
                </div>
            </div>
        </div>
    </div>
</form>

    <div class="form-top">
      <div class="container">
        <div class="row">

  








<!-- main container -->
            <div class="container mt-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Users Information</h5>


                            <div class="container mt-4">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Table</h5>
 <!-- Table -->
<div class="container mt-4">
<?php
include_once 'db.php';

$query = "SELECT * FROM users";
$result = mysqli_query($conn, $query);

if ($result) {
    echo "<table>";
    echo "<tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Email</th><th>Password</th><th>Gender</th><th>Status</th><th>Actions</th></tr>";
    
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>{$row['id']}</td>";
        echo "<td>{$row['fname']}</td>";
        echo "<td>{$row['lname']}</td>";
        echo "<td>{$row['email']}</td>";
        echo "<td>{$row['password']}</td>";
        echo "<td>{$row['gender']}</td>";
        echo "<td>";
        if ($row['active'] == 1) {
            echo "Active";
        } else {
            echo "Inactive";
        }
        echo "</td>";
        echo "<td><a href='edit_user.php?id={$row['id']}'><button>Edit</button></a></td>";
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




<!-- Pie Chart -->
<div class="container mt-4">
  
        <title>Gender Pie Chart</title>
    <!-- Add Chart.js library -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <div class="container mt-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Gender Pie Chart</h5>
                <canvas id="pieChart" style="max-height: 400px;"></canvas>
    
    </div>

    <?php
    // PHP code to connect to the database and fetch data
    $servername='localhost';   
    $username='root';    
    $password='';    
    $dbname = "sample";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Fetch data
        $stmt = $conn->prepare("SELECT gender, COUNT(*) as count FROM users GROUP BY gender");
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    ?>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            var genderData = <?php echo json_encode($data); ?>;
            var labels = [];
            var dataValues = [];
            var backgroundColors = [];

            genderData.forEach(item => {
                labels.push(item.gender);
                dataValues.push(item.count);
                backgroundColors.push(getRandomColor());
            });

            new Chart(document.querySelector('#pieChart'), {
                type: 'pie',
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'Gender',
                        data: dataValues,
                        backgroundColor: backgroundColors,
                        hoverOffset: 4
                    }]
                }
            });

            // Function to generate random colors
            function getRandomColor() {
                var letters = '0123456789ABCDEF';
                var color = '#';
                for (var i = 0; i < 6; i++) {
                    color += letters[Math.floor(Math.random() * 16)];
                }
                return color;
            }
        });
    </script>
        </div>
    </div>
</div>
<!-- End Pie Chart -->



 


<!-- Bar Chart -->
<div class="container mt-4">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Activities' Bar Graph</h5>
            <canvas id="barChart" style="max-height: 400px;"></canvas>
        </div>
    </div>
</div>
<!-- End Bar Chart -->

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

// SQL query to count activities for each month
$query = "SELECT MONTH(date) AS month, COUNT(*) AS activity_count FROM activity GROUP BY MONTH(date)";
$result = mysqli_query($conn, $query);

// Initialize an array to hold the data
$activityData = array();

while ($row = mysqli_fetch_assoc($result)) {
    $activityData[] = $row;
}
?>

<!-- Add Chart.js library -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<!-- JavaScript for the Bar Chart -->
<script>
    // Pass PHP-generated activity data to JavaScript
    var activityData = <?php echo json_encode($activityData); ?>;
    var months = [];
    var activityCounts = [];

    // Extract data for the chart
    for (var i = 0; i < activityData.length; i++) {
        months.push(activityData[i].month);
        activityCounts.push(activityData[i].activity_count);
    }

    // Create and render the bar chart
    var ctx = document.getElementById('barChart').getContext('2d');
    var myBarChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: months, // Months
            datasets: [{
                label: 'Activities in Each Month',
                data: activityCounts,
                backgroundColor: 'rgba(75, 192, 192, 0.2)', // Bar color
                borderColor: 'rgba(75, 192, 192, 1)', // Border color
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>

































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