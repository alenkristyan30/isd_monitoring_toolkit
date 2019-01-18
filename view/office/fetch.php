<?php
    include '../../config/database.php';
    $id = $_POST['id'];
    $sql = mysqli_query($connect, "SELECT * FROM tbloffice WHERE officeID = $id");
    $row = mysqli_fetch_assoc($sql);
    $output = array(
      "id" => $row['officeID'],
        "name" => $row['officeNAME'],
        "type" => $row['officeLEVEL']
    );
    echo json_encode($output);
