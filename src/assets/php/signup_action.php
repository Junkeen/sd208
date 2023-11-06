<?php 
    include_once("db_connect.php");
    $retVal = "";
    $isValid = true;
    $status = 400;

    $fname = trim($_REQUEST['first_name']);
    $lname = trim($_REQUEST['last_name']);
    $email = trim($_REQUEST['email']);
    $password = trim($_REQUEST['password']);
    $confirmpassword = trim($_REQUEST['confirm_password']);

    // Check fields are empty or not
    if($fname == '' || $lname == '' || $email == '' || $password == '' || $confirmpassword == ''){
        $isValid = false;
        $retVal = "Please fill all fields.";
    }

    // Check if confirm password matching or not
    if($isValid && ($password != $confirmpassword) ){
        $isValid = false;
        $retVal = "Confirm password not matching.";
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
        $stmt->close();
        if($result->num_rows > 0){
            $isValid = false;
            $retVal = "Email already exists.";
        }
    }

    // Insert records
    if($isValid){
        $insertSQL = "INSERT INTO users(fname,lname,email,password ) values(?,?,?,?)";
        $stmt = $con->prepare($insertSQL);
        $password = password_hash($password, PASSWORD_DEFAULT);
        $stmt->bind_param("ssss",$fname,$lname,$email,$password);
        $stmt->execute();
        $stmt->close();
        $retVal = "Account created successfully.";
        unset($_SESSION['user_email']);
        $status = 200;
    }

    $myObj = array(
        'status' => $status,
        'message' => $retVal  
    );
    $myJSON = json_encode($myObj, JSON_FORCE_OBJECT);
    echo $myJSON;
?>