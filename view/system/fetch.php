<?php
    include '../../config/database.php';
    $id = $_POST['id'];
    $sql = mysqli_query($connect, "SELECT * FROM tblinfosystem WHERE infosystemID = $id");
    $row = mysqli_fetch_assoc($sql);
    $output = array(
        "name" => $row['infosystemNAME'],
        "abbreviation" => $row['infosystemABBREVIATION'],
        "type" => $row['infosystemDEVELOPMENTTYPE'],
        "datecreated" => $row['infosystemDATECREATED'],
        "developer" => $row['infosystemDEVELOPER']

    );
    echo json_encode($output);
