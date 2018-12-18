<?php
    include '../config/database.php';
    $secname = $_POST['secname'];
    $divsel = $_POST['divsel'];
    $secdes = $_POST['secdes'];
    $action = $_POST['action'];
    $id = $_POST['id'];
    if ($action == 'Add') {
        mysqli_query($connect, "INSERT INTO section( secname , div_id , secdes )VALUES('$secname' , '$divsel' , '$secdes')");
        echo 'Added Successfully';
    }
    if ($action == 'Edit') {
        mysqli_query($connect, "UPDATE section SET secname = '$secname' , div_id = '$divsel' , secdes = '$secdes'  WHERE secid = $id");
        echo 'Update Successfully';
    }
    if ($action == 'Delete') {
        mysqli_query($connect, "DELETE FROM section WHERE secid = $id");
    }
