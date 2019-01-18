<?php
    include '../../config/database.php';
    $sql = mysqli_query($connect, "SELECT * FROM tbloffice");
    $output = array('data' => array());
    while ($row = mysqli_fetch_assoc($sql)) {
      $button =
      '<div class="btn-group text-white" role="group" aria-label="First group">
          <a class="btn btn-sm btn-warning width-60 m-r-2" name="edit" id="'.$row['officeID'].'">Edit</a>
          <a class="btn btn-sm btn-danger width-60 m-r-2" name="delete" id="'.$row['officeID'].'">Delete</a>
      </div>
      ';
        $output['data'][] = array(
            $row['officeID'],
            $row['officeNAME'],
            $row['officeLEVEL'],
            $button


        );
    }
    echo json_encode($output);
