<?php
    session_start();
    include '../config/database.php';
    $type = $_POST['divisiontypetxt'];
    $name = $_POST['divisionnametxt'];
    $action = $_POST['action'];
    $id = $_POST['id'];
    if ($action == 'Add'){
        mysqli_query($connect, "INSERT INTO tbldivision ( divisionNAME , divisionTYPE )VALUES( '$name' , '$type' )");
        echo 'Added Successfully';
    }
    if ($action == 'Edit') {
        mysqli_query($connect, "UPDATE tbldivision SET divisionNAME = '$name' , divisionTYPE = '$type' WHERE divisionID = $id");

        echo 'Update Successfully';
    }
    if ($action == 'Delete') {
        mysqli_query($connect, "DELETE FROM tbldivision WHERE divisionID = $id");
        echo 'Delete Successfully';

    }
