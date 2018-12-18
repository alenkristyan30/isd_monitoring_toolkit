<?php
    include '../config/database.php';
    $id = $_POST['id'];
    $sql = mysqli_query($connect, "SELECT reportid , username , code_name, reportstatus, reportcateg, reportcomment, reportimg, reports.timestamp FROM reports INNER JOIN useracc ON useracc.id = reports.user_id INNER JOIN infosys ON infosys.sysid = reports.sys_id WHERE reposts.sys_id = $id");
    $row = mysqli_fetch_assoc($sql);
    $output = array(
        "reportidview" => $row['reportid'],
        "fname" => $row['fname'],
        "mname" => $row['mname'],
        "extname" => $row['extname'],
        "divsel" => $row['divcode'],
        "possel" => $row['postitle'],
        "gender" => $row['gender'],
        "username" => $row['username']
    );
    echo json_encode($output);
