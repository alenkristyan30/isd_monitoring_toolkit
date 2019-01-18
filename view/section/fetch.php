<?php
    include '../../config/database.php';
    $id = $_POST['id'];
    $sql = mysqli_query($connect, "SELECT * FROM tblsection WHERE sectionID = $id");
    $row = mysqli_fetch_assoc($sql);
    $output = array(
        "name" => $row['sectionNAME'],
        "type" => $row['sectionDIVISIONID']
    );
    echo json_encode($output);
