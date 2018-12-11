<?php
    include '../config/database.php';
    $id = $_POST['id'];
    $sql = mysqli_query($connect, "SELECT sname , fname , mname , extname , division , gender , username FROM userinfo INNER JOIN useracc ON useracc.id = userinfo.id WHERE userinfo.id = $id");
    $row = mysqli_fetch_assoc($sql);
    $output = array(
        "sname" => $row['sname'],
        "fname" => $row['fname'],
        "mname" => $row['mname'],
        "extname" => $row['extname'],
        " divsel" => $row['division'],
        "gender" => $row['gender'],
        "username" => $row['username']
    );
    echo json_encode($output);
