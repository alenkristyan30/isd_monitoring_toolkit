<?php
    include '../../config/database.php';
    $sql = mysqli_query($connect, "SELECT serviceID , serviceNAME , officeNAME FROM tblservice INNER JOIN tbloffice ON tbloffice.officeID = tblservice.serviceOFFICEID ");
    $output = array('data' => array());
    while ($row = mysqli_fetch_assoc($sql)) {
      $button =
      '<div class="button-group text-white w-100" role="group" aria-label="First group">
          <a class="btn btn-warning waves-effect waves-light" name="edit" id="'.$row['serviceID'].'">Edit</a>
          <a class="btn btn-danger waves-effect waves-light" name="delete" id="'.$row['serviceID'].'">Delete</a>
      </div>
      ';
        $output['data'][] = array(
            $row['serviceNAME'],
            $row['officeNAME'],
            $button


        );
    }
    echo json_encode($output);
