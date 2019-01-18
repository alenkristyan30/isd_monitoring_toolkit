<?php
    session_start();
    include '../../config/database.php';
    $officeid = $_POST['officeidtxt'];
    $type = $_POST['officeleveltxt'];
    $name = $_POST['officenametxt'];
    $action = $_POST['action'];
    $id = $_POST['id'];
    if ($action == 'Add'){
        mysqli_query($connect, "INSERT INTO tbloffice (  officeID , officeNAME , officeLEVEL )VALUES('$officeid ' , '$name' , '$type' )");
        echo 'Added Successfully';
    }

    if ($action == 'Edit') {
        mysqli_query($connect, "UPDATE tbloffice SET  officeID = '$officeid' ,  officeNAME = '$name' , officeLEVEL = '$type' WHERE officeID = $id");

        echo 'Update Successfully';
    }
    if ($action == 'Delete') {
        mysqli_query($connect, "DELETE FROM tbloffice WHERE officeID = $id");
        echo 'Delete Successfully';

    }
