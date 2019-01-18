<?php
    session_start();
    include '../../config/database.php';
    $office = $_POST['serviceofficetxt'];
    $name = $_POST['servicenametxt'];
    $action = $_POST['action'];
    $id = $_POST['id'];
    if ($action == 'Add'){
        mysqli_query($connect, "INSERT INTO tblservice ( serviceNAME , serviceOFFICEID )VALUES( '$name' , '$office' )");
        echo 'Added Successfully';
    }
    if ($action == 'Edit') {
        mysqli_query($connect, "UPDATE tblservice SET serviceNAME = '$name' , serviceOFFICEID = '$office' WHERE serviceID = $id");

        echo 'Update Successfully';
    }
    if ($action == 'Delete') {
        mysqli_query($connect, "DELETE FROM tblservice WHERE serviceID = $id");
        echo 'Delete Successfully';

    }
