<?php
    if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['submit'])) {
        $conn = mysqli_connect('localhost', 'root', '', 'lost_and_found');
        if (!$conn) {
            throw new Exception("Connection failed: " . mysqli_connect_error());
        }

        if (!empty($_POST['username']) && !empty($_POST['password']) &&!empty($_POST['email'])) {
            $username = $_POST['username'];
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $email = $_POST['email'];

            $sql = "INSERT INTO users (username, password, email)
            VALUES ('$username', '$password', '$email')";

            mysqli_query($conn, $sql);
            mysqli_close($conn);   
            
            header("Location: ../submitted.php");
            exit();
        } else {
            echo "error: something went wrong";
            echo "submission unsuccessful";
        }
    }
?>