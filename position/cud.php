<?php
    session_start();
    include '../config/database.php';
    $type = $_POST['positiontypetxt'];
    $name = $_POST['positionnametxt'];
    $action = $_POST['action'];
    $id = $_POST['id'];
    if ($action == 'Add'){
        mysqli_query($connect, "INSERT INTO tblposition ( positionNAME , positionTYPE )VALUES( '$name' , '$type' )");
        echo 'Added Successfully';
    }
    if ($action == 'Edit') {
        mysqli_query($connect, "UPDATE tblposition SET positionNAME = '$name' , positionTYPE = '$type' WHERE positionID = $id");

        echo 'Update Successfully';
    }
    if ($action == 'Delete') {
        mysqli_query($connect, "DELETE FROM tblposition WHERE positionID = $id");
        echo 'Delete Successfully';

    }
