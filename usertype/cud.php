<?php
    session_start();
    include '../config/database.php';
    $type = $_POST['typetxt'];
    $action = $_POST['action'];
    $id = $_POST['id'];
    if ($action == 'Add'){
        mysqli_query($connect, "INSERT INTO tblusertype ( usertypeTITLE )VALUES( '$type' )");
        echo 'Added Successfully';
    }
    if ($action == 'Edit') {
        mysqli_query($connect, "UPDATE tblusertype SET usertypeTITLE = '$type' WHERE usertypeID = $id");

        echo 'Update Successfully';
    }
    if ($action == 'Delete') {
        mysqli_query($connect, "DELETE FROM tblusertype WHERE usertypeID = $id");

    }
