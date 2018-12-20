<?php
    require_once("../config/database.php");
    $user = $_POST['username'];
    $pass = MD5($_POST['password']);
    $sql = mysqli_query($connect, "SELECT * FROM useracc WHERE username = '$user' AND password = '$pass' ");
    $row = mysqli_num_rows($sql);
    if ($row > 0) {
        echo "Success";
    } else {
        echo "Error";
    }
