<?php
    include '../../config/database.php';
    $id = $_POST['id'];
    $sql = mysqli_query($connect, "SELECT * FROM tblquestion WHERE questionID = $id");
    $row = mysqli_fetch_assoc($sql);
    $output = array(
        "qid" => $row['questionID'],
        "qq" => $row['questionQUERY']
    );
    echo json_encode($output);
