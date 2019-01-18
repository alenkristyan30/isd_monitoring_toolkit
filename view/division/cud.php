<?php
    session_start();
    include '../../config/database.php';
    $office = $_POST['divisionofficetxt'];
    $name = $_POST['divisionnametxt'];
    $action = $_POST['action'];
    $id = $_POST['id'];
    if ($action == 'Add'){
        mysqli_query($connect, "INSERT INTO tbldivision ( divisionNAME , divisionOFFICEID )VALUES( '$name' , '$office' )");
        echo 'Added Successfully';
    }
    if ($action == 'Edit') {
        mysqli_query($connect, "UPDATE tbldivision SET divisionNAME = '$name' , divisionOFFICEID = '$office' WHERE divisionID = $id");

        echo 'Update Successfully';
    }
    if ($action == 'Delete') {
        mysqli_query($connect, "DELETE FROM tbldivision WHERE divisionID = $id");
        echo 'Delete Successfully';

    }
