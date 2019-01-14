<?php
    include '../config/database.php';
    $sql = mysqli_query($connect, "SELECT * FROM tblsection");
    $output = array('data' => array());
    while ($row = mysqli_fetch_assoc($sql)) {
      $button =
      '<div class="w-100 button-group text-white " role="group" aria-label="First group">
          <a class="btn btn-warning waves-effect waves-light" name="edit" id="'.$row['sectionID'].'">Edit</a>
          <a class="btn btn-danger waves-effect waves-light" name="delete" id="'.$row['sectionID'].'">Delete</a>
      </div>
      ';
        $output['data'][] = array(
            $row['sectionID'],
            $row['sectionNAME'],
            $row['sectionTYPE'],
            $button


        );
    }
    echo json_encode($output);
