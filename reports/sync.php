<?php
    include '../config/database.php';
    $sql = mysqli_query($connect, "SELECT reportid , username , code_name, reportstatus, reportcateg, reportcomment, reportimg, reports.timestamp FROM reports INNER JOIN useracc ON useracc.id = reports.user_id INNER JOIN infosys ON infosys.sysid = reports.sys_id");
    $output = array('data' => array());
    while ($row = mysqli_fetch_assoc($sql)) {
        $button =
        '<a name="view" id="'.$row['reportid'].'" class="btn-sm btn-floating blue"><i class="fas fa-eye" data-toggle="tooltip" data-placement="bottom" title="View" data-toggle="modal" data-target="#basicExampleModal"></i></a>
        <a name="assign" id="'.$row['reportid'].'" class="btn-sm btn-floating amber"><i class="fas fa-user-cog" data-toggle="tooltip" data-placement="bottom" title="Assign"></i></a>
        <a name="delete" id="'.$row['reportid'].'" class="btn-sm btn-floating red"><i class="fas fa-trash-alt" data-toggle="tooltip" data-placement="bottom" title="Delete"></i></a>';
        $output['data'][] = array(
            $row['reportid'],
            $row['username'],
            $row['code_name'],
            $row['reportstatus'],
            $row['reportcateg'],
            $row['reportcomment'],
            $row['reportimg'],
            $row['timestamp'],
            $button
        );
    }
    echo json_encode($output);
