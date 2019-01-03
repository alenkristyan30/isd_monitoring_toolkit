<?php
    include '../config/database.php';
    $action = $_POST['action'];
    $id = $_POST['id'];
    if ($action == 'Add'){
        mysqli_query($connect, "INSERT INTO userinfo( sname, fname, mname, extname, div_id,  pos_id, gender , userimg )VALUES('$sname' , '$fname' , '$mname' , '$extname' , '$divsel' , '$possel', '$gender', '$new_name' )");
        echo 'Added Successfully';
    }
    if ($action == 'Assign') {
        mysqli_query($connect, "UPDATE userinfo SET sname = '$sname', fname = '$fname' , mname = '$mname',  extname = '$extname', div_id = '$divsel', pos_id = '$possel',  gender = '$gender' WHERE id = $id");
        echo 'Update Successfully';
    }
    if ($action == 'Delete') {
        mysqli_query($connect, "DELETE FROM userinfo WHERE id = $id");
    }
