<?php
    include '../config/database.php';
    $id = $_POST['id'];
    $sql = mysqli_query($connect, "SELECT * FROM position WHERE posid = $id");
    $row = mysqli_fetch_assoc($sql);
    $output = array(
        "postitle" => $row['postitle'],
        "posdes" => $row['posdes']
    );
    echo json_encode($output);
