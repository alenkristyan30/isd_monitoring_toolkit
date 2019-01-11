<?php
    include '../config/database.php';
    $sql = mysqli_query($connect, "SELECT useraccountID , useraccountUSERNAME , usertypeTITLE , useraccountSTATUS  FROM tbluseraccount
      INNER JOIN tblusertype ON tblusertype.usertypeID = tbluseraccount.useraccountTYPE");
    $output = array('data' => array());
    while ($row = mysqli_fetch_assoc($sql)) {
        $output['data'][] = array(
            $row['useraccountID'],
            $row['useraccountUSERNAME'],
            $row['usertypeTITLE'],
            $row['useraccountSTATUS']

        );
    }
    echo json_encode($output);
