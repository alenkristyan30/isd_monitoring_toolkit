<?php
    include '../config/database.php';
    $postitle = $_POST['postitle'];
    $posdes = $_POST['posdes'];
    $action = $_POST['action'];
    $id = $_POST['id'];
    if ($action == 'Add') {
        mysqli_query($connect, "INSERT INTO position ( postitle , posdes)VALUES( '$postitle' , '$posdes' )");
        echo 'Added Successfully';
    }
    if ($action == 'Edit') {
        mysqli_query($connect, "UPDATE position SET postitle = '$postitle' , posdes = '$posdes'  WHERE posid = $id");
        echo 'Update Successfully';
    }
    if ($action == 'Delete') {
        mysqli_query($connect, "DELETE FROM position WHERE posid = $id");
    }
