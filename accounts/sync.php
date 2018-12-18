<?php
    include '../config/database.php';
    $sql = mysqli_query($connect, "SELECT * FROM useracc");
    $output = array('data' => array());
    while ($row = mysqli_fetch_assoc($sql)) {
        $output['data'][] = array(
            $row['id'],
            $row['username'],
            $row['type'],
            $row['timestamp']
        );
    }
    echo json_encode($output);
