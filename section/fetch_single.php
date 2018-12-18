<?php
    include '../config/database.php';
    $id = $_POST['id'];
    $sql = mysqli_query($connect, "SELECT * FROM division WHERE divid = $id");
    $row = mysqli_fetch_assoc($sql);
    $output = array(
        "divcode" => $row['divcode'],
        "divname" => $row['divname'],
        "divdes" => $row['divdes']
    );
    echo json_encode($output);
