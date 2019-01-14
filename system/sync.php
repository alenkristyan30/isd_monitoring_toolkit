<?php
    include '../config/database.php';
    $sql = mysqli_query($connect, "SELECT * FROM tblinfosystem");
    $output = array('data' => array());
    while ($row = mysqli_fetch_assoc($sql)) {
      $button =
      '<div class="row button-group text-white " role="group" aria-label="First group">
          <a class="btn btn-warning waves-effect waves-light" name="edit" id="'.$row['infosystemID'].'">Edit</a>
          <a class="btn btn-danger waves-effect waves-light" name="delete" id="'.$row['infosystemID'].'">Delete</a>
      </div>
      ';
        $output['data'][] = array(
            $row['infosystemID'],
            $row['infosystemNAME'],
            $row['infosystemABBREVIATION'],
            $row['infosystemDEVELOPMENTTYPE'],
            $row['infosystemDATECREATED'],
            $row['infosystemDEVELOPER'],
            $button


        );
    }
    echo json_encode($output);
