<?php 
    include_once("db_connect.php");
    $retVal = "";
    $isValid = true;
    $status = 400;
    $data = []; 

    $email = trim($_REQUEST['email']);
    $password = trim($_REQUEST['password']);
// Check user's role and active status
if (isset($_POST["btnsignin"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    // Query to retrieve user role based on email, password, and active status
    $sql = "SELECT role, active FROM users WHERE Email = ? AND Password = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $email, $password);
    
    if ($stmt->execute()) {
        $stmt->bind_result($role, $active);
        if ($stmt->fetch()) {
            if ($active == 1) { // Check if the user is active
                // Redirect based on the user's role
                if ($role == "admin") {
                    header("Location: admin.php");
                } elseif ($role == "user") {
                    header("Location: user.php");
                } else {
                    // Handle unknown roles
                    echo "Unknown role: $role";
                }
                exit();
            } else {
                echo "Your account is inactive.";
            }
        } else {
            echo "Invalid email or password";
        }
    } else {
        echo "Database error: " . $conn->error;
    }
    
    $stmt->close();
}





    // Check fields are empty or not
    if($email == '' || $password == ''){
        $isValid = false;
        $retVal = "Please fill all fields.";
    }

    // Check if email is valid or not
    if ($isValid && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $isValid = false;
        $retVal = "Invalid email.";
    }

    // Check if email already exists
    if($isValid){
        $stmt = $con->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        $obj = mysqli_fetch_object($result); 
        $stmt->close();
        if($result->num_rows > 0){
            $isPassword = password_verify ($password , $obj->password);
            if($isPassword == true){
                $status = 200;
                $retVal = "Success.";
                $data = $obj;
                $_SESSION['user_email'] = $obj->email;
                $_SESSION['user_id'] = $obj->id;
                $_SESSION['user_fname'] = $obj->fname;
                $_SESSION['user_lname'] = $obj->lname;
                $_SESSION['user_name'] = "$obj->fname $obj->lname";
                $_SESSION["role"] = $obj->role;
                $_SESSION["currentSessionID"] = session_id();
            }else{
                $retVal = "You may have entered a wrong email or password.";
            }
        }else{
            $retVal = "Account does not exist.";
        }
    }

    $myObj = array(
        'status' => $status,
        'data' => $data,
        'message' => $retVal  
    );
    $myJSON = json_encode($myObj, JSON_FORCE_OBJECT);
    echo $myJSON;
?>