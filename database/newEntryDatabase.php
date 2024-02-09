<?php
    // database operations for items
    if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['submit'])) {
        $conn = mysqli_connect('localhost', 'root', '', 'lost_and_found');
        if (!$conn) {
            throw new Exception("Connection failed: " . mysqli_connect_error());
        }

        // LOST ITEMS database operations
        if (!empty($_POST['owner-name']) 
         && !empty($_POST['lost-description']) 
         && !empty($_POST['lost-location']) 
         && !empty($_POST['lost-date'])) {

            $ownerName = $_POST['owner-name'];
            $description = $_POST['lost-description'];
            $location = $_POST['lost-location'];
            $date = $_POST['lost-date'];

            $sql = "INSERT INTO  `lost_items` (`owner_name`, `description`, `location`, `date_lost`)
                    VALUES ('$ownerName', '$description', '$location', '$date')";

            mysqli_query($conn, $sql); 
            mysqli_close($conn);   
            
            header("Location: ../submitted.php");
            exit();
        }

        // FOUND ITEMS database operations
        else if (isset($_POST['found-description']) && isset($_POST['found-date']) && isset($_POST['found-location']) && isset($_POST['image']) ) {
            echo "found items";

            // found items code here

        }

        else {
            echo "not submitted";
        } 
    }
?>