<?php
    include '../config/database.php';
    $sql = mysqli_query($connect, "SELECT secid,  secname , divname , secdes FROM section INNER JOIN division ON division.divid = section.div_id");
    $output = array('data' => array());
    while ($row = mysqli_fetch_assoc($sql)) {
        $button =
        '<a name="edit" id="'.$row['secid'].'" class="btn-sm btn-floating amber"><i class="fas fa-edit" data-toggle="tooltip" data-placement="bottom" title="Edit"></i></a>
        <a name="delete" id="'.$row['secid'].'" class="btn-sm btn-floating red"><i class="fas fa-trash-alt" data-toggle="tooltip" data-placement="bottom" title="Delete"></i></a>';
        $output['data'][] = array(
            $row['secname' ],
            $row['divname' ],
            $row['secdes' ],
            $button
        );
    }
    echo json_encode($output);
