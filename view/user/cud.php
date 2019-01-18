<?php
    session_start();
    include '../../config/database.php';
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
        mysqli_query($connect, "INSERT INTO tbluserinfo ( userinfoSURNAME , userinfoFIRSTNAME, userinfoMIDDLENAME, userinfoGENDER, userinfoSERVICELENGTH, userinfoOFFICEID, userinfoDIVISIONID, userinfoSECTIONID,  userinfoPOSITIONID, userinfoUNITID)
                                VALUES('$surname' , '$firstname' , '$middlename' , '$gender' , '$lservice' , '$office', '$division', '$section' ,'$position' ,'$unit')
                                ON DUPLICATE KEY UPDATE userinfoSURNAME = '$surname', userinfoFIRSTNAME = '$firstname' , userinfoMIDDLENAME = '$middlename',  userinfoGENDER = '$gender', userinfoSERVICELENGTH = '$lservice',
                                                        userinfoOFFICEID = '$office', userinfoDIVISIONID = '$division',  userinfoSECTIONID = '$section', userinfoPOSITIONID = '$position' , userinfoUNITID = '$unit'
                                ");
        mysqli_query($connect, "INSERT INTO tbluseraccount( useraccountUSERNAME , useraccountPASSWORD , useraccountTYPE )VALUES('$username' , MD5('$password'), '$type') ON DUPLICATE KEY UPDATE useraccountUSERNAME = '$username', useraccountPASSWORD = MD5('$password') , useraccountTYPE ='$type' ");
        echo 'Added Successfully';
    }
    if ($action == 'Edit') {
        mysqli_query($connect, "UPDATE tbluserinfo SET userinfoSURNAME = '$surname', userinfoFIRSTNAME = '$firstname' , userinfoMIDDLENAME = '$middlename',  userinfoGENDER = '$gender', userinfoSERVICELENGTH = '$lservice',
                                userinfoOFFICEID = '$office', userinfoDIVISIONID = '$division',  userinfoSECTIONID = '$section', userinfoPOSITIONID = '$position' , userinfoUNITID = '$unit' WHERE userinfoID = $id");
        mysqli_query($connect, "UPDATE tbluseraccount SET useraccountUSERNAME = '$username', useraccountPASSWORD = MD5('$password') , useraccountTYPE ='$type'  WHERE useraccountID = $id");
        echo 'Update Successfully';
    }
    if ($action == 'Delete') {
        mysqli_query($connect, "DELETE FROM tbluserinfo WHERE userinfoID = $id");
        mysqli_query($connect, "DELETE FROM tbluseraccount WHERE useraccountID = $id");
    }
