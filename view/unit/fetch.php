<?php
    include '../../config/database.php';
    $id = $_POST['id'];
    $sql = mysqli_query($connect, "SELECT * FROM tblunit WHERE unitID = $id");
    $row = mysqli_fetch_assoc($sql);
    $output = array(
        "name" => $row['unitNAME'],
        "type" => $row['unitDIVISIONID']
    );
    echo json_encode($output);
