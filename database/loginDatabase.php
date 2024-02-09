<?php 
    if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['submit'])) {
        $conn = mysqli_connect('localhost', 'root', '', 'lost_and_found');
        if (!$conn) {
            throw new Exception("Connection failed: " . mysqli_connect_error());
        }

        if (!empty($_POST['username']) &&!empty($_POST['password'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $sql = "SELECT * FROM users WHERE username = '$username' OR email = '$username'";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {

                $row = mysqli_fetch_assoc($result);
                $dbpassword = $row['password'];

                if (password_verify($password, $dbpassword)) {
                    header("Location: ../home.php");
                    exit();
                } else {
                    echo "Wrong Password";
                }
            } else {
                echo "Wrong Username";
            }
        }
    }
?>