<?php
    session_start();
    include '../config/database.php';
    $type = $_POST['unittypetxt'];
    $name = $_POST['unitnametxt'];
    $action = $_POST['action'];
    $id = $_POST['id'];
    if ($action == 'Add'){
        mysqli_query($connect, "INSERT INTO tblunit ( unitNAME , unitTYPE )VALUES( '$name' , '$type' )");
        echo 'Added Successfully';
    }
    if ($action == 'Edit') {
        mysqli_query($connect, "UPDATE tblunit SET unitNAME = '$name' , unitTYPE = '$type' WHERE unitID = $id");

        echo 'Update Successfully';
    }
    if ($action == 'Delete') {
        mysqli_query($connect, "DELETE FROM tblunit WHERE unitID = $id");
        echo 'Delete Successfully';

    }
