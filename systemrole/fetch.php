<?php
    include '../config/database.php';
    $id = $_POST['id'];
    $sql = mysqli_query($connect, "SELECT * FROM tblsystemrole WHERE systemroleID = $id");
    $row = mysqli_fetch_assoc($sql);
    $output = array(
        "name" => $row['systemroleNAME'],
        "system" => $row['systemroleSYSTEM']
    );
    echo json_encode($output);
