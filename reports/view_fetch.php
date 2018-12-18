<?php
    include '../config/database.php';
    $id = $_POST['id'];
    $sql = mysqli_query($connect, "SELECT reportid , username , code_name, reportstatus, reportcateg, reportcomment, reports.timestamp FROM reports INNER JOIN useracc ON useracc.id = reports.user_id INNER JOIN infosys ON infosys.sysid = reports.sys_id WHERE reports.reportid = $id");
    $row = mysqli_fetch_assoc($sql);
    $output = array(
        "reportidview" => $row['reportid'],
        "usernameview" => $row['username'],
        "systemview" => $row['code_name'],
        "categoryview" => $row['reportcateg'],
        "statusview" => $row['reportstatus'],
        "commentview" => $row['reportcomment'],
        "timestamnpview" => $row['timestamp']

    );
    echo json_encode($output);
