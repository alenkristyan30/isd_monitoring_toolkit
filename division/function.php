<?php
    include '../config/database.php';
    $divcode = $_POST['divid'];
    $divname = $_POST['divname'];
    $action = $_POST['action'];
    $id = $_POST['id'];
    if ($action == 'Add') {
        mysqli_query($connect, "INSERT INTO division( divcode , divname )VALUES('$divcode' , '$divname' )");
        echo 'Added Successfully';
    }
    if ($action == 'Edit') {
        mysqli_query($connect, "UPDATE division SET divcode = '$divcode' , divname = '$divname'  WHERE id = $id");
        echo 'Update Successfully';
    }
    if ($action == 'Delete') {
        mysqli_query($connect, "DELETE FROM division WHERE id = $id");
    }
