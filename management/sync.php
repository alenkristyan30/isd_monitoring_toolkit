<?php
    include '../config/database.php';
    $sql = mysqli_query($connect, "SELECT userinfo.id, username , sname, fname, mname, extname, divcode, gender FROM userinfo INNER JOIN division ON division.id = userinfo.division INNER JOIN useracc ON useracc.id = userinfo.id");
    $output = array('data' => array());
    while ($row = mysqli_fetch_assoc($sql)) {
        $button =
        '
        <a name="view" id="'.$row['id'].'" class="btn-sm btn-floating info-color-dark"><i class="fas fa-eye" data-toggle="tooltip" data-placement="bottom" title="View" data-toggle="modal" data-target="#basicExampleModal"></i></a>;
        <a name="edit" id="'.$row['id'].'" class="btn-sm btn-floating warning-color-dark"><i class="fas fa-edit" data-toggle="tooltip" data-placement="bottom" title="Edit"></i></a>&nbsp;
        <a name="delete" id="'.$row['id'].'" class="btn-sm btn-floating danger-color-dark"><i class="fas fa-trash-alt" data-toggle="tooltip" data-placement="bottom" title="Delete"></i></a>';

        $output['data'][] = array(
            $row['username'],
            $row['sname'],
            $row['fname'],
            $row['mname'],
            $row['extname'],
            $row['divcode'],
            $row['gender'],
            $button
        );
    }
    echo json_encode($output);
