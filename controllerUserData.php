<?php 
require("script.php"); 
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'lost_and_found');
$email = "";
$errors = array();

// Login
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $check_email = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $check_email);
    if (mysqli_num_rows($result) > 0) {
        $fetch = mysqli_fetch_assoc($result);
        $dbpassword = $fetch['password'];
        if (password_verify($password, $dbpassword)) {
            $_SESSION['email'] = $email;
            $status = $fetch['status'];
            if($status == 'verified'){   
                $_SESSION['email'] = $email;  
                $_SESSION['password'] = $password; 
                header('location: home.php');
            }else{
                $info = "It's look like you haven't still verify your email - $email";
                $_SESSION['info'] = $info;
                header('location: userOtp.php');
            }
        } else {
            $errors['email'] = "Incorrect email or password!";
        }
    } else {
        $errors['email'] = "It's look like you're not a member yet! Click on the bottom link to signup.";
    }
}

// signup 
if (isset($_POST['signup'])) {
    $first_name = $_POST["first-name"];
    $last_name = $_POST["last-name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm-password"];
    if($password !== $confirm_password){
        $errors['password'] = "Confirm password not matched!";
    }
    $email_check = "SELECT * FROM users WHERE email = '$email'";
    $res = mysqli_query($conn, $email_check);
    if(mysqli_num_rows($res) > 0){
        $errors['email'] = "Email that you have entered is already exist!";
    }
    if (count($errors) === 0) {
        $encrypted_password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $code = rand(999999, 111111);
        $status = "notverified";
        $insert_data = "INSERT INTO users (first_name, last_name, password, email, code, status)
                        VALUES ('$first_name', '$last_name', '$encrypted_password', '$email', '$code', '$status')";
        $data_check = mysqli_query($conn, $insert_data);
        if($data_check){
            $subject = "Email Verification Code";
            $message = "Your verification code is $code";
            if(sendMail($email, $subject, $message)){
                $info = "A unique code has been sent to your email address. Please check your inbox and enter the code below to complete the login process.";
                $_SESSION['info'] = $info;
                $_SESSION['email'] = $email;
                $_SESSION['password'] = $password;
                header('location: userOtp.php');
                exit();
            }else{
                $errors['otp-error'] = "Failed while sending code!";
            }
        }else{
            $errors['db-error'] = "Failed while inserting data into database!";
        }   
        // header("Location: ../submitted.php");
        // exit();
    }
}

// verification code submit button
if (isset($_POST['confirm'])) {
    $_SESSION['info'] = "";
    $otp_code = $_POST['otp'];
    $check_code = "SELECT * FROM users WHERE code = $otp_code";
    $code_res = mysqli_query($conn, $check_code);
    if(mysqli_num_rows($code_res) > 0){
        $fetch_data = mysqli_fetch_assoc($code_res);
        $fetch_code = $fetch_data['code'];
        $email = $fetch_data['email'];
        $code = 0;
        $status = 'verified';
        $update_otp = "UPDATE users SET code = $code, status = '$status' WHERE code = $fetch_code";
        $update_res = mysqli_query($conn, $update_otp);
        if($update_res){
            $_SESSION['name'] = $name;
            $_SESSION['email'] = $email;
            header('location: home.php');
            exit();
        }else{
            $errors['otp-error'] = "Failed while updating code!";
        }
    }else{
        $errors['otp-error'] = "You've entered incorrect code!";
    }
}


// forgot password CONTINUE button
if(isset($_POST['check-email'])){
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $check_email = "SELECT * FROM users WHERE email='$email'";
    $run_sql = mysqli_query($conn, $check_email);
    if(mysqli_num_rows($run_sql) > 0){
        $code = rand(999999, 111111);
        $insert_code = "UPDATE users SET code = $code WHERE email = '$email'";
        $run_query =  mysqli_query($conn, $insert_code);
        if($run_query){
            $subject = "Password Reset Code";
            $message = "Your password reset code is $code";
            if(sendMail($email, $subject, $message)){
                $info = "We've sent a passwrod reset otp to your email - $email";
                $_SESSION['info'] = $info;
                $_SESSION['email'] = $email;
                header('location: reset-code.php');
                exit();
            }else{
                $errors['otp-error'] = "Failed while sending code!";
            }
        }else{
            $errors['db-error'] = "Something went wrong!";
        }
    }else{
        $errors['email'] = "This email address does not exist!";
    }
}

//if user click check reset otp button
if(isset($_POST['check-reset-otp'])){
    $_SESSION['info'] = "";
    $otp_code = $_POST['otp'];
    $check_code = "SELECT * FROM users WHERE code = $otp_code";
    $code_res = mysqli_query($conn, $check_code);
    if(mysqli_num_rows($code_res) > 0){
        $fetch_data = mysqli_fetch_assoc($code_res);
        $email = $fetch_data['email'];
        $_SESSION['email'] = $email;
        $info = "Please create a new password that you don't use on any other site.";
        $_SESSION['info'] = $info;
        header('location: newPassword.php');
        exit();
    }else{
        $errors['otp-error'] = "You've entered incorrect code!";
    }
}

//if user click change password button
if(isset($_POST['change-password'])){
    $_SESSION['info'] = "";
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    if($password !== $cpassword){
        $errors['password'] = "Confirm password not matched!";
    }else{
        $code = 0;
        $email = $_SESSION['email']; //getting this email using session
        $encpass = password_hash($password, PASSWORD_BCRYPT);
        $update_pass = "UPDATE users SET code = $code, password = '$encpass' WHERE email = '$email'";
        $run_query = mysqli_query($conn, $update_pass);
        if($run_query){
            $info = "Your password changed. Now you can login with your new password.";
            $_SESSION['info'] = $info;
            header('Location: password-changed.php');
        }else{
            $errors['db-error'] = "Failed to change your password!";
        }
    }
}

//if login now button click
if(isset($_POST['login-now'])){
    header('Location: index.php');
}

?>