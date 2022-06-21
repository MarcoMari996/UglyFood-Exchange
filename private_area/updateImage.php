<?php

    session_start();

    include '../actions_db/config_conn_to_db.php';
    $email = $_SESSION["email"];
    if (isset($_FILES["fileToUpload"]["name"])) {
        $codedImage = base64_encode(file_get_contents($_FILES["fileToUpload"]["tmp_name"]));

        $conn = new mysqli($host, $db_user, $db_pass, $db_name);
        if (mysqli_connect_error()) {
            die('Connection error: ' . mysqli_connect_errno() . ' : ' . mysqli_connect_error());
        } else {
            $query = "UPDATE users SET profileImg='$codedImage' WHERE email='$email'";
            if ($conn->query($query)) {

                $_SESSION['profileImg'] = $codedImage;
                header('Location: http://localhost/MySite/private_area/private.php');
                exit();
            } else {
                echo "ERROR: " . $conn->error;
            }
        }

    }
