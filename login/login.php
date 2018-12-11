<?php
    require_once("../config/database.php");
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $sql = mysqli_query($connect, "SELECT * FROM accounts WHERE username = '$user' AND password = '$pass' AND user_type = 'admin'");
    $row = mysqli_num_rows($sql);
    if ($row > 0) {
        echo "Success";
    } else {
        echo "Error";
    }
