<?php
    include '../config/database.php';
    $id = $_POST['id'];
    $sql = mysqli_query($connect, "SELECT * FROM tbloffice WHERE officeID = $id");
    $row = mysqli_fetch_assoc($sql);
    $output = array(
        "name" => $row['officeNAME'],
        "type" => $row['officeTYPE']
    );
    echo json_encode($output);
