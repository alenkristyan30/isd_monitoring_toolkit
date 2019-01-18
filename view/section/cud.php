<?php
    session_start();
    include '../../config/database.php';
    $type = $_POST['sectiontypetxt'];
    $name = $_POST['sectionnametxt'];
    $action = $_POST['action'];
    $id = $_POST['id'];
    if ($action == 'Add'){
        mysqli_query($connect, "INSERT INTO tblsection ( sectionNAME , sectionTYPE )VALUES( '$name' , '$type' )");
        echo 'Added Successfully';
    }
    if ($action == 'Edit') {
        mysqli_query($connect, "UPDATE tblsection SET sectionNAME = '$name' , sectionTYPE = '$type' WHERE sectionID = $id");

        echo 'Update Successfully';
    }
    if ($action == 'Delete') {
        mysqli_query($connect, "DELETE FROM tblsection WHERE sectionID = $id");
        echo 'Delete Successfully';

    }
