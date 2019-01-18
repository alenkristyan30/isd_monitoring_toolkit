<?php
    include '../../config/database.php';
    $sql = mysqli_query($connect, "SELECT divisionID , divisionNAME , officeNAME FROM tbldivision INNER JOIN tbloffice ON tbloffice.officeID = tbldivision.divisionOFFICEID ");
    $output = array('data' => array());
    while ($row = mysqli_fetch_assoc($sql)) {
      $button =
      '<div class="button-group text-white w-100" role="group" aria-label="First group">
          <a class="btn btn-warning waves-effect waves-light" name="edit" id="'.$row['divisionID'].'">Edit</a>
          <a class="btn btn-danger waves-effect waves-light" name="delete" id="'.$row['divisionID'].'">Delete</a>
      </div>
      ';
        $output['data'][] = array(
            $row['divisionNAME'],
            $row['officeNAME'],
            $button


        );
    }
    echo json_encode($output);
