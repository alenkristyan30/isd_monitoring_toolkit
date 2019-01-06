<?php
    session_start();
    include '../config/database.php';
    $sname = $_POST['surname'];
    $fname = $_POST['firstname'];
    $mname = $_POST['middlename'];
    $extname = $_POST['nameext'];
    $gender = $_POST['gender'];
    $divsel = $_POST['divsel'];
    $secsel = $_POST['secsel'];
    $possel = $_POST['possel'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $new_name = rand(). '.' ."jpeg";
	  $destination = '../uploads/' . $new_name;
    move_uploaded_file($_FILES['image_file']['tmp_name'], $destination);
    $action = $_POST['action'];
    $id = $_POST['id'];
    if ($action == 'Add'){
        mysqli_query($connect, "INSERT INTO userinfo( sname, fname, mname, extname, div_id, sec_id,  pos_id, gender , userimg )VALUES('$sname' , '$fname' , '$mname' , '$extname' , '$divsel' , '$secsel', '$possel', '$gender', '$new_name' )");
        mysqli_query($connect, "INSERT INTO useracc( username, password , type )VALUES('$username' , MD5('$password'), 3)");
        echo 'Added Successfully';
    }
    if ($action == 'Edit') {
        mysqli_query($connect, "UPDATE userinfo SET sname = '$sname', fname = '$fname' , mname = '$mname',  extname = '$extname', div_id = '$divsel', sec_id = '$secsel', pos_id = '$possel',  gender = '$gender' WHERE id = $id");
        mysqli_query($connect, "UPDATE useracc SET username = '$username', password = MD5('$password') WHERE id = $id");
        echo 'Update Successfully';
    }
    if ($action == 'Delete') {
        mysqli_query($connect, "DELETE FROM userinfo WHERE id = $id");
        mysqli_query($connect, "DELETE FROM useracc WHERE id = $id");
    }
