<?php
    include '../config/database.php';
    $sql = mysqli_query($connect,
    "SELECT tbluserinfo.userinfoID , useraccountUSERNAME , userinfoFIRSTNAME , userinfoMIDDLENAME , userinfoSURNAME , userinfoGENDER , userinfoSERVICELENGTH ,
      usertypeTITLE , officeNAME , divisionNAME , positionNAME , sectionNAME , unitNAME FROM tbluserinfo
      INNER JOIN tbluseraccount ON tbluseraccount.useraccountID = tbluserinfo.userinfoID
      INNER JOIN tbloffice ON tbloffice.officeID = tbluserinfo.userinfoOFFICE
      INNER JOIN tblusertype ON tblusertype.usertypeID = tbluseraccount.useraccountTYPE
      INNER JOIN tbldivision ON tbldivision.divisionID = tbluserinfo.userinfoDIVISION
      INNER JOIN tblsection ON tblsection.sectionID = tbluserinfo.userinfoSECTION
      INNER JOIN tblposition ON tblposition.positionID = tbluserinfo.userinfoPOSITION
      INNER JOIN tblunit ON tblunit.unitID = tbluserinfo.userinfoUNIT");
    $output = array('data' => array());
    while ($row = mysqli_fetch_assoc($sql)) {
        $button =
        '<div class="row button-group text-white " role="group" aria-label="First group">
            <a class="btn btn-info btn-block waves-effect waves-light" name="view" id="'.$row['userinfoID'].'"  >View</a>
            <a class="btn btn-warning btn-block waves-effect waves-light" name="edit" id="'.$row['userinfoID'].'">Edit</a>
            <a class="btn btn-danger btn-block waves-effect waves-light" name="delete" id="'.$row['userinfoID'].'">Delete</a>
        </div>
        ';
        $output['data'][] = array(
            $row['userinfoID'],
            $row['useraccountUSERNAME'],
            $row['userinfoFIRSTNAME'],
            $row['userinfoMIDDLENAME'],
            $row['userinfoSURNAME'],
            $row['userinfoGENDER'],
            $row['userinfoSERVICELENGTH'],
            $row['usertypeTITLE'],
            $row['officeNAME'],
            $row['divisionNAME'],
            $row['positionNAME'],
            $row['sectionNAME'],
            $row['unitNAME'],
            $button
        );
    }
    echo json_encode($output);
