<?php
    include '../config/database.php';
    $sql = mysqli_query($connect, "SELECT userinfo.id, username , sname, fname, mname, extname, divname , secname,  postitle, gender FROM userinfo INNER JOIN section ON section.secid = userinfo.sec_id INNER JOIN division ON division.divid = userinfo.div_id INNER JOIN useracc ON useracc.id = userinfo.id  INNER JOIN position ON position.posid = userinfo.pos_id WHERE useracc.type = 2 ");
    $output = array('data' => array());
    while ($row = mysqli_fetch_assoc($sql)) {
        $button =
        '
        <a name="view" id="'.$row['id'].'" class="btn-sm btn-floating blue z-depth-0"><i class="fas fa-eye" data-toggle="tooltip" data-placement="bottom" title="View" data-toggle="modal" data-target="#basicExampleModal"></i></a>
        <a name="edit" id="'.$row['id'].'" class="btn-sm btn-floating amber z-depth-0"><i class="fas fa-edit" data-toggle="tooltip" data-placement="bottom" title="Edit"></i></a>
        <a name="delete" id="'.$row['id'].'" class="btn-sm btn-floating red z-depth-0"><i class="fas fa-trash-alt" data-toggle="tooltip" data-placement="bottom" title="Delete"></i></a>';
        $output['data'][] = array(
            $row['id'],
            $row['username'],
            $row['sname'],
            $row['fname'],
            $row['mname'],
            $row['extname'],
            $row['divname'],
            $row['secname'],
            $row['postitle'],
            $row['gender'],
            $button
        );
    }
    echo json_encode($output);
