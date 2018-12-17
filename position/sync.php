<?php
    include '../config/database.php';
    $sql = mysqli_query($connect, "SELECT * FROM position");
    $output = array('data' => array());
    while ($row = mysqli_fetch_assoc($sql)) {
        $button =
        '<a name="edit" id="'.$row['posid'].'" class="btn-sm btn-floating amber"><i class="fas fa-edit" data-toggle="tooltip" data-placement="bottom" title="Edit"></i></a>
        <a name="delete" id="'.$row['posid'].'" class="btn-sm btn-floating red"><i class="fas fa-trash-alt" data-toggle="tooltip" data-placement="bottom" title="Delete"></i></a>';
        $output['data'][] = array(
            $row['postitle'],
            $row['posdes'],
            $button
        );
    }
    echo json_encode($output);
