<?php
    session_start();
    include '../../config/database.php';
    $type = $_POST['infosystemtypetxt'];
    $name = $_POST['infosystemnametxt'];
    $abbreviation = $_POST['infosystemabbreviationtxt'];
    $developer = $_POST['infosystemdevelopertxt'];
    $datecreated = $_POST['infosystemdatecreatedtxt'];
    $roles = $_POST['infosystemrolestxt'];

    $action = $_POST['action'];
    $id = $_POST['id'];
    if ($action == 'Add'){
        mysqli_query($connect, "INSERT INTO tblinfosystem ( infosystemNAME , infosystemABBREVIATION,  infosystemTYPE , infosystemDATECREATED , infosystemDEVELOPER , infosystemUSAGEROLES )
                                VALUES( '$name' , '$abbreviation' , '$type' , '$datecreated' , '$developer' , '$roles' )");
        echo 'Added Successfully';
    }
    if ($action == 'Edit') {
        mysqli_query($connect, "UPDATE tblinfosystem SET infosystemNAME = '$name' , infosystemABBREVIATION = '$abbreviation' ,  infosystemTYPE = '$type' , infosystemDATECREATED = '$datecreated' ,
          infosystemDEVELOPER = '$developer' ,  infosystemUSAGEROLES = '$roles' WHERE infosystemID = $id");

        echo 'Update Successfully';
    }
    if ($action == 'Delete') {
        mysqli_query($connect, "DELETE FROM tblinfosystem WHERE infosystemID = $id");
        echo 'Delete Successfully';

    }
