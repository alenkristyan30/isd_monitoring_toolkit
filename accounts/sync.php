<?php
    include '../config/database.php';
    $sql = mysqli_query($connect, "SELECT * FROM useracc WHERE type != 1");
    $output = array('data' => array());
    while ($row = mysqli_fetch_assoc($sql)) {
        $output['data'][] = array(
            $row['id'],
            $row['username'],
            $row['type'],
              $row['accstatus'],
            $row['datecreated']
        );
    }
    echo json_encode($output);
