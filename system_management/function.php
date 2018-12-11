<?php
    include '../config/database.php';
    $codename = $_POST['codename'];
    $sysname = $_POST['sysname'];
    $yrcreated = $_POST['yrcreated'];
    $sysdes = $_POST['sysdes'];
    $action = $_POST['action'];
    $id = $_POST['id'];
    if ($action == 'Add') {
        mysqli_query($connect, "INSERT INTO infosys( code_name, sysname, sysdescription ,  created )VALUES('$codename' , '$sysname' , '$sysdes' , '$yrcreated')");
        mysqli_query($connect, "INSERT INTO infosys( code_name, sysname, sysdescription ,  created )VALUES('$codename' , '$sysname' , '$sysdes' , '$yrcreated')");
        echo 'Added Successfully';
    }
    if ($action == 'Edit') {
        mysqli_query($connect, "UPDATE infosys SET code_name = '$codename', sysname = '$sysname' , sysdescription = '$sysdes',  created = '$yrcreated' WHERE id = $id");
        echo 'Update Successfully';
    }
    if ($action == 'Delete') {
        mysqli_query($connect, "DELETE FROM infosys WHERE id = $id");
    }
