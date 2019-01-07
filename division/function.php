<?php
  session_start();
    include '../config/database.php';
    $divcode = $_POST['divid'];
    $divname = $_POST['divname'];
    $divdes = $_POST['divdes'];
    $action = $_POST['action'];
    $id = $_POST['id'];
    if ($action == 'Add') {
        mysqli_query($connect, "INSERT INTO division( divcode , divname , divdes )VALUES('$divcode' , '$divname' , '$divdes')");
        echo 'Added Successfully';
    }
    if ($action == 'Edit') {
        mysqli_query($connect, "UPDATE division SET divcode = '$divcode' , divname = '$divname' , divdes = '$divdes'  WHERE divid = $id");
        echo 'Update Successfully';
    }
    if ($action == 'Delete') {
        mysqli_query($connect, "DELETE FROM division WHERE divid = $id");
    }
