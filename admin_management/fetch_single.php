<?php
    include '../config/database.php';
    $id = $_POST['id'];
    $sql = mysqli_query($connect, "SELECT * FROM userinfo WHERE id = $id");
    $row = mysqli_fetch_assoc($sql);
    $output = array(
        "sname" => $row['sname'],
        "fname" => $row['fname'],
        "mname" => $row['mname'],
        "extname" => $row['extname'],
        "username" => $row['username'],
        "password" => $row['password'],
        "gender" => $row['gender']
    );
    echo json_encode($output);
