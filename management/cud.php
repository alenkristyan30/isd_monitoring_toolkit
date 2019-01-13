<?php
    session_start();
    include '../config/database.php';
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $surname = $_POST['surname'];
    $gender = $_POST['gender'];
    $lservice = $_POST['lengthservice'];

    $type = $_POST['usertypeselect'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $office = $_POST['officeselect'];
    $division= $_POST['divisionselect'];
    $section = $_POST['sectionselect'];
    $position = $_POST['positionselect'];
    $unit = $_POST['unitselect'];


    $action = $_POST['action'];
    $id = $_POST['id'];
    if ($action == 'Add'){
        mysqli_query($connect, "INSERT INTO tbluserinfo ( userinfoSURNAME , userinfoFIRSTNAME, userinfoMIDDLENAME, userinfoGENDER, userinfoSERVICELENGTH, userinfoOFFICE, userinfoDIVISION, userinfoSECTION,  userinfoPOSITION, userinfoUNIT)
                                VALUES('$surname' , '$firstname' , '$middlename' , '$gender' , '$lservice' , '$office', '$division', '$section' ,'$position' ,'$unit')");
        mysqli_query($connect, "INSERT INTO tbluseraccount( useraccountUSERNAME , useraccountPASSWORD , useraccountTYPE )VALUES('$username' , MD5('$password'), '$type')");
        echo 'Added Successfully';
    }
    if ($action == 'Edit') {
        mysqli_query($connect, "UPDATE tbluserinfo SET sname = '$sname', fname = '$fname' , mname = '$mname',  extname = '$extname', div_id = '$divsel', sec_id = '$secsel', pos_id = '$possel',  gender = '$gender' WHERE id = $id");
        mysqli_query($connect, "UPDATE tbluseraccount SET username = '$username', password = MD5('$password') WHERE id = $id");
        echo 'Update Successfully';
    }
    if ($action == 'Delete') {
        mysqli_query($connect, "DELETE FROM userinfo WHERE id = $id");
        mysqli_query($connect, "DELETE FROM useracc WHERE id = $id");
    }
