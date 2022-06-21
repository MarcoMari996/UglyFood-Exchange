<?php
    session_start();
    include 'config_conn_to_db.php';

    $email = filter_input(INPUT_POST, 'email');
    $psw = filter_input(INPUT_POST, 'psw');

    $conn = new mysqli($host, $db_user, $db_pass, $db_name);
    if(mysqli_connect_error()) {
        die('Connection error: '.mysqli_connect_errno().' : '.mysqli_connect_error());
    } else {
        $query_row = "SELECT * FROM users WHERE email = '$email'";
        $result1 = $conn -> query($query_row);

        if (0 != $result1->num_rows) {
            $query_psw = "SELECT password FROM users WHERE email = '$email'";
            $result2 = $conn -> query($query_psw);
            $hashed_psw = mysqli_fetch_row($result2);
            if(password_verify($psw, $hashed_psw[0])) {
                # ---------------------------------- #
                $user_data = mysqli_fetch_row($result1);
                $_SESSION['name'] = $user_data[0];
                $_SESSION['surname'] = $user_data[1];
                $_SESSION['birth'] = $user_data[2];
                $_SESSION['email'] = $user_data[3];
                $_SESSION['profileImg'] = $user_data[5];
                # ---------------------------------- #

                header('Location: http://localhost/MySite/private_area/private.php');
                $conn->close();
                exit;
            } else {
                echo '<script> 
                    alert("Incorrect Password. Please check your credentials!");
                    location="../forms/loginForm/logIn.php";
                </script>';
            }
        } else {
            echo '<script>   
                  alert("Incorrect email. Please check your credentials!");
                  location="../forms/loginForm/logIn.php";  
            </script>';
        }
    }
    $conn->close();
    exit;

