<?php
    include '../config/database.php';
    $sql = mysqli_query($connect, "SELECT userinfo.id, username , sname, fname, mname, extname, divname , secname,  postitle, gender FROM userinfo INNER JOIN section ON section.secid = userinfo.sec_id INNER JOIN division ON division.divid = userinfo.div_id INNER JOIN useracc ON useracc.id = userinfo.id  INNER JOIN position ON position.posid = userinfo.pos_id WHERE useracc.type = 2 ");
    $output = array('data' => array());
    while ($row = mysqli_fetch_assoc($sql)) {
        $button =
        '<div class="button-group mr-2 text-white" role="group" aria-label="First group">
        <a class="btn btn-info waves-effect waves-light" name="view" id="'.$row['id'].'" ><span class="btn-label"><i class="fa fa-eye"></i></span>View</a>
        <a class="btn btn-warning waves-effect waves-light" name="edit" id="'.$row['id'].'" ><span class="btn-label"><i class="fa fa-eye"></i></span>Edit</a>
        <a class="btn btn-danger waves-effect waves-light" name="delete" id="'.$row['id'].'" ><span class="btn-label"><i class="fa fa-trash"></i></span>Delete</a>
        </div>
        ';
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
