<?php
    include '../../config/database.php';
    $id = $_POST['id'];
    $sql = mysqli_query($connect, "SELECT * FROM tbldivision WHERE divisionID = $id");
    $row = mysqli_fetch_assoc($sql);
    $output = array(
        "name" => $row['divisionNAME'],
        "office" => $row['divisionOFFICEID']
    );
    echo json_encode($output);
