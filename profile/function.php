<?php
    include '../config/database.php';
    $aname = $_POST['acro'];
    $fdname = $_POST['fdname'];
    $action = $_POST['action'];
    $id = $_POST['id'];
    if ($action == 'Add') {
        mysqli_query($connect, "INSERT INTO division( dacronym, dname )VALUES('$aname' , '$fdname' )");
        echo 'Added Successfully';
    }
    if ($action == 'Edit') {
        mysqli_query($connect, "UPDATE division SET dacronym = '$aname' , dname = '$fdname'  WHERE id = $id");
        echo 'Update Successfully';
    }
    if ($action == 'Delete') {
        mysqli_query($connect, "DELETE FROM division WHERE id = $id");
    }
