<?php
    include '../../config/database.php';
    $sql = mysqli_query($connect,
    "SELECT tbluserinfo.userinfoID , useraccountUSERNAME , userinfoFIRSTNAME , userinfoMIDDLENAME , userinfoSURNAME , userinfoGENDER , userinfoSERVICELENGTH ,
      usertypeTITLE , officeNAME , divisionNAME , positionNAME , sectionNAME , unitNAME , useraccountSTATUS FROM tbluserinfo
      INNER JOIN tbluseraccount ON tbluseraccount.useraccountID = tbluserinfo.userinfoID
      INNER JOIN tbloffice ON tbloffice.officeID = tbluserinfo.userinfoOFFICEID
      INNER JOIN tblusertype ON tblusertype.usertypeID = tbluseraccount.useraccountTYPE
      INNER JOIN tbldivision ON tbldivision.divisionID = tbluserinfo.userinfoDIVISIONID
      INNER JOIN tblsection ON tblsection.sectionID = tbluserinfo.userinfoSECTIONID
      INNER JOIN tblposition ON tblposition.positionID = tbluserinfo.userinfoPOSITIONID
      INNER JOIN tblunit ON tblunit.unitID = tbluserinfo.userinfoUNITID WHERE tbluseraccount.useraccountTYPE = 3");
    $output = array('data' => array());
    while ($row = mysqli_fetch_assoc($sql)) {
        $button =
        '<div class="btn-group text-white">
            <a class="btn btn-sm btn-primary width-60 m-r-2" name="view" id="'.$row['userinfoID'].'"  >View</a>
            <a class="btn btn-sm btn-warning width-60 m-r-2" name="edit" id="'.$row['userinfoID'].'">Edit</a>
            <a class="btn btn-sm btn-danger width-60 m-r-2" name="delete" id="'.$row['userinfoID'].'">Delete</a>
        </div>';
        $output['data'][] = array(
            $row['userinfoID'],
            $row['useraccountUSERNAME'],
            $row['userinfoFIRSTNAME'],
            $row['userinfoMIDDLENAME'],
            $row['userinfoSURNAME'],
            $row['userinfoGENDER'],
            $row['userinfoSERVICELENGTH'],
            $row['officeNAME'],
            $row['divisionNAME'],
            $row['positionNAME'],
            $row['sectionNAME'],
            $row['unitNAME'],
            $row['useraccountSTATUS'],
            $button
        );
    }
    echo json_encode($output);
