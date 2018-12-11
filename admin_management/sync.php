<?php
    include '../config/database.php';
    $sql = mysqli_query($connect, "SELECT * FROM userinfo");
    $output = array('data' => array());
    while ($row = mysqli_fetch_assoc($sql)) {
        $button =
        '<a name="edit" id="'.$row['id'].'"><i class="fas fa-edit" data-toggle="tooltip" data-placement="bottom" title="Edit"></i></a>&nbsp;
          <a name="delete" id="'.$row['id'].'"><i class="fas fa-trash-alt" data-toggle="tooltip" data-placement="bottom" title="Delete"></i></a>';
        $output['data'][] = array(
            $row['sname' ],
            $row['fname' ],
            $row['mname' ],
            $row['extname' ],
            $row['username' ],
              $row['password' ],
            $row['gender'],
            $button
        );
    }
    echo json_encode($output);
