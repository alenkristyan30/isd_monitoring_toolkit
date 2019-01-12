<?php
    include '../config/database.php';
    $id = $_POST['id'];
    $sql = mysqli_query($connect, "SELECT * FROM tblusertype WHERE usertypeID = $id");
    $row = mysqli_fetch_assoc($sql);
    $output = array(
        "type" => $row['usertypeTITLE']
    );
    echo json_encode($output);
