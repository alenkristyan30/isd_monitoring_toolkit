<?php
    include '../config/database.php';
    $fname = $_POST['fname'];
    $sname = $_POST['sname'];
    $mname = $_POST['mname'];
    $extname = $_POST['extname'];
    $id = $_POST['id'];
    mysqli_query($connect, "UPDATE userinfo SET sname = '$sname' , fname = '$fname', mname = '$mname' , extname = '$extname' WHERE id = $id");
    echo 'Update Successfully';
