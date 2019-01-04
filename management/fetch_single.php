<?php
    include '../config/database.php';
    $id = $_POST['id'];
    $sql = mysqli_query($connect, "SELECT sname , fname , mname , extname , div_id , sec_id , pos_id, gender , username ,password FROM userinfo INNER JOIN useracc ON useracc.id = userinfo.id WHERE userinfo.id = $id");
    $row = mysqli_fetch_assoc($sql);
    $output = array(
        "sname" => $row['sname'],
        "fname" => $row['fname'],
        "mname" => $row['mname'],
        "extname" => $row['extname'],
        "divsel" => $row['div_id'],
        "secsel" => $row['sec_id'],
        "possel" => $row['pos_id'],
        "gender" => $row['gender'],
        "username" => $row['username'],
        "password" => $row['password']
    );
    echo json_encode($output);
