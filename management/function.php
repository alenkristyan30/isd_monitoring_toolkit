<?php
    include '../config/database.php';

    $sname = $_POST['surname'];
    $fname = $_POST['firstname'];
    $mname = $_POST['middlename'];
    $extname = $_POST['nameext'];
    $gender = $_POST['gender'];
    $divsel = $_POST['divsel'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $action = $_POST['action'];
    $id = $_POST['id'];
    if ($action == 'Add') {
        $new_name = rand(). '.' ."jpeg";
        $destination = '../uploads/' . $new_name;
        move_uploaded_file($_FILES['image_file']['tmp_name'], $destination);
        mysqli_query($connect, "INSERT INTO userinfo( sname, fname, mname, extname, division, gender , userimg )VALUES('$sname' , '$fname' , '$mname' , '$extname' , '$divsel' , '$gender', '$new_name' )");
        mysqli_query($connect, "INSERT INTO useracc( username, password )VALUES('$username' , MD5('$password'))");
        echo 'Added Successfully';
    }
    if ($action == 'Edit') {
        mysqli_query($connect, "UPDATE userinfo SET sname = '$sname', fname = '$fname' , mname = '$mname',  extname = '$extname', division = '$divsel',  gender = '$gender' WHERE id = $id");
        mysqli_query($connect, "UPDATE useracc SET username = '$username', password = MD5('$password') WHERE id = $id");
        echo 'Update Successfully';
    }
    if ($action == 'Delete') {
        mysqli_query($connect, "DELETE FROM userinfo WHERE id = $id");
        mysqli_query($connect, "DELETE FROM useracc WHERE id = $id");
    }
