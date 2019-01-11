<?php
    include '../config/database.php';
    $sql = mysqli_query($connect, "SELECT * FROM tbluseraccount WHERE useraccountTYPE != 1");
    $output = array('data' => array());
    while ($row = mysqli_fetch_assoc($sql)) {
        $output['data'][] = array(
            $row['useraccountID'],
            $row['useraccountUSERNAME'],
            $row['useraccountTYPE'],
            $row['useraccountSTATUS']

        );
    }
    echo json_encode($output);
