<?php
    include '../../config/database.php';
    $id = $_POST['id'];
    $sql = mysqli_query($connect, "SELECT * FROM tblservice WHERE serviceID = $id");
    $row = mysqli_fetch_assoc($sql);
    $output = array(
        "name" => $row['serviceNAME'],
        "office" => $row['serviceOFFICEID']
    );
    echo json_encode($output);
