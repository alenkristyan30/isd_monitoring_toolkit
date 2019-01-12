<?php
    include '../config/database.php';
    $sql = mysqli_query($connect, "SELECT * FROM tbloffice");
    $output = array('data' => array());
    while ($row = mysqli_fetch_assoc($sql)) {
      $button =
      '<div class="row button-group text-white " role="group" aria-label="First group">
          <a class="btn btn-warning waves-effect waves-light" name="edit" id="'.$row['officeID'].'">Edit</a>
          <a class="btn btn-danger waves-effect waves-light" name="delete" id="'.$row['officeID'].'">Delete</a>
      </div>
      ';
        $output['data'][] = array(
            $row['officeID'],
            $row['officeNAME'],
            $row['officeTYPE'],
            $button


        );
    }
    echo json_encode($output);
