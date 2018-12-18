<?php
    include '../config/database.php';
    $id = $_POST['id'];
    $sql = mysqli_query($connect, "SELECT * FROM section WHERE secid = $id");
    $row = mysqli_fetch_assoc($sql);
    $output = array(
        "secname" => $row['secname'],
        "divsel" => $row['div_id'],
        "secdes" => $row['secdes']
    );
    echo json_encode($output);
