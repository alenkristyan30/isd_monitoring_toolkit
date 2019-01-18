<?php
    include '../../config/database.php';
    $sql = mysqli_query($connect, "SELECT reportID , userinfoFIRSTNAME , userinfoSURNAME , userinfoMIDDLENAME , infosystemABBREVIATION , reportCATEGORY , reportPRIORITY , reportSEVERITY , reportSTATUS , reportDATE , reportFIXEDDATE FROM tblreports
                                    INNER JOIN tbluserinfo ON tbluserinfo.userinfoID = tblreports.reportUSERID
                                    INNER JOIN tblinfosystem ON tblinfosystem.infosystemID = tblreports.reportSYSTEMID");
    $output = array('data' => array());
    while ($row = mysqli_fetch_assoc($sql)) {
      $fullname = '<p>'.$row['userinfoSURNAME'].' , '.$row['userinfoFIRSTNAME'].' '.$row['userinfoMIDDLENAME'].' </p>';
      $button =
      '<div class="w-100 button-group text-white " role="group" aria-label="First group">
          <a class="btn btn-warning waves-effect waves-light" name="edit" id="'.$row['reportID'].'">Edit</a>
          <a class="btn btn-danger waves-effect waves-light" name="delete" id="'.$row['reportID'].'">Delete</a>
      </div>
      ';
        $output['data'][] = array(
            $row['reportID'],
            $fullname,
            $row['infosystemABBREVIATION'],
            $row['reportCATEGORY'],
            $row['reportPRIORITY'],
            $row['reportSEVERITY'],
            $row['reportSTATUS'],
            $row['reportDATE'],
            $row['reportFIXEDDATE'],
            $button


        );
    }
    echo json_encode($output);
