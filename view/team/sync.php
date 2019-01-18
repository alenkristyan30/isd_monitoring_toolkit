<?php
    include '../../config/database.php';
    $sql = mysqli_query($connect, "SELECT systemroleID , systemroleNAME , infosystemNAME FROM tblsystemrole INNER JOIN tblinfosystem ON tblinfosystem.infosystemID = tblsystemrole.systemroleSYSTEM");
    $output = array('data' => array());
    while ($row = mysqli_fetch_assoc($sql)) {
      $button =
      '<div class="w-100 button-group text-white " role="group" aria-label="First group">
          <a class="btn btn-warning waves-effect waves-light" name="edit" id="'.$row['systemroleID'].'">Edit</a>
          <a class="btn btn-danger waves-effect waves-light" name="delete" id="'.$row['systemroleID'].'">Delete</a>
      </div>
      ';
        $output['data'][] = array(
            $row['systemroleID'],
            $row['systemroleNAME'],
            $row['infosystemNAME'],
            $button


        );
    }
    echo json_encode($output);
