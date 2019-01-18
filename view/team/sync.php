<?php
    include '../../config/database.php';
    $sql = mysqli_query($connect, "SELECT teamID , teamUSERID ,  reportID , teamROLE FROM tblteam INNER JOIN tblreports ON tblreports.reportID = tblteam.teamREPORTID");
    $output = array('data' => array());
    while ($row = mysqli_fetch_assoc($sql)) {
      $button =
      '<div class="w-100 button-group text-white " role="group" aria-label="First group">
          <a class="btn btn-warning waves-effect waves-light" name="edit" id="'.$row['teamID'].'">Edit</a>
          <a class="btn btn-danger waves-effect waves-light" name="delete" id="'.$row['teamID'].'">Delete</a>
      </div>
      ';
        $output['data'][] = array(
            $row['teamUSERID'],
            $row['teamROLE'],
            $row['reportID'],

            $button


        );
    }
    echo json_encode($output);
