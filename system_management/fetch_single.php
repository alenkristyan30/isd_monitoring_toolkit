<?php
    include '../config/database.php';
    $id = $_POST['id'];
    $sql = mysqli_query($connect, "SELECT * FROM infosys WHERE id = $id");
    $row = mysqli_fetch_assoc($sql);
    $output = array(
        "codename" => $row['code_name'],
        "sysname" => $row['sysname'],
        "yrcreated" => $row['created'],
        "sysdes" => $row['sysdescription']
    );
    echo json_encode($output);
