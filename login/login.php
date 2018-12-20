<?php
    require_once("../config/database.php");
    $user = $_POST['username'];
    $sql = mysqli_query($connect, "SELECT * FROM useracc WHERE username = '$user'");
    $row = mysqli_num_rows($sql);
    if ($row > 0) {
        echo "Success";
    } else {
        echo "Error";
    }
