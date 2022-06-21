<?php
	session_start();
    include 'config_conn_to_db.php';

    $name = filter_input(INPUT_POST, 'name');
    $surname = filter_input(INPUT_POST,'surname');
    $birth = filter_input(INPUT_POST, 'birth');
    $email = filter_input(INPUT_POST, 'email');
    $psw = filter_input(INPUT_POST, 'psw');
    $hash_psw = password_hash($psw, PASSWORD_BCRYPT);
    $profileImg = base64_encode(file_get_contents('../images/default-avatar.jpg'));
    $conn = new mysqli($host, $db_user, $db_pass, $db_name);
    if(mysqli_connect_error()) {
        die('Connection error: '.mysqli_connect_errno().' : '.mysqli_connect_error());
    } else {
        $query = "INSERT INTO users (name, surname, birth, email, password, profileImg) values ('$name', '$surname', '$birth', '$email', '$hash_psw','$profileImg')";
        if($conn->query($query)) {
            header('Location: http://localhost/MySite/actions_db/successful_signin.html');
            exit();
        } else {
            echo "ERROR: " . $conn->error;
        }
    }

