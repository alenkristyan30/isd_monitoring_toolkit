<?php
    session_start();
    include '../config/database.php';
    $system = $_POST['systemrolesystemtxt'];
    $name = $_POST['systemrolenametxt'];
    $action = $_POST['action'];
    $id = $_POST['id'];
    if ($action == 'Add'){
        mysqli_query($connect, "INSERT INTO tblsystemrole ( systemroleNAME , systemroleSYSTEM )VALUES( '$name' , '$system' )");
        echo 'Added Successfully';
    }
    if ($action == 'Edit') {
        mysqli_query($connect, "UPDATE tblsystemrole SET systemroleNAME = '$name' , systemroleSYSTEM = '$system' WHERE systemroleID = $id");

        echo 'Update Successfully';
    }
    if ($action == 'Delete') {
        mysqli_query($connect, "DELETE FROM tblsystemrole WHERE systemroleID = $id");
        echo 'Delete Successfully';

    }
