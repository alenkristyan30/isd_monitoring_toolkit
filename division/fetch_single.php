<?php
    include '../config/database.php';
    $id = $_POST['id'];
    $sql = mysqli_query($connect, "SELECT * FROM division WHERE id = $id");
    $row = mysqli_fetch_assoc($sql);
    $output = array(
        "divcode" => $row['divcode'],
        "divname" => $row['divname']
    );
    echo json_encode($output);
