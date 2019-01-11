<?php
    include '../config/database.php';
    $sql = mysqli_query($connect,
    "SELECT tbluserinfo.userinfoID , useraccountUSERNAME , userinfoFIRSTNAME , userinfoMIDDLENAME , userinfoSURNAME , userinfoGENDER , userinfoSERVICELENGTH ,
    useraccountTYPE , officeNAME , divisionNAME , positionNAME , sectionNAME , unitNAME
      FROM tbluserinfo
      INNER JOIN tbluseraccount ON tbluseraccount.useraccountID = tbluserinfo.userinfoID
      INNER JOIN tbloffice ON tbloffice.officeID = tbluserinfo.userinfoOFFICE
      INNER JOIN tbldivision ON tbldivision.divisionID = tbluserinfo.userinfoDIVISION
      INNER JOIN tblsection ON tblsection.sectionID = tbluserinfo.userinfoSECTION
      INNER JOIN tblposition ON tblposition.positionID = tbluserinfo.userinfoPOSITION
      INNER JOIN tblunit ON tblunit.unitID = tbluserinfo.userinfoUNIT");
    $output = array('data' => array());
    while ($row = mysqli_fetch_assoc($sql)) {
        $button =
        '<div class="button-group text-white" role="group" aria-label="First group">
        <a class="btn btn-info waves-effect waves-light" name="view" id="'.$row['userinfoID'].'" ><i class="fa fa-eye"></i>  View</a>
        <a class="btn btn-warning waves-effect waves-light" name="edit" id="'.$row['userinfoID'].'" ><i class="fa fa-eye"></i>  Edit</a>
        <a class="btn btn-danger waves-effect waves-light" name="delete" id="'.$row['userinfoID'].'" ><i class="fa fa-trash"></i>  Delete</a>
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
            $row['useraccountTYPE'],
            $row['officeNAME'],
            $row['divisionNAME'],
            $row['positionNAME'],
            $row['sectionNAME'],
            $row['unitNAME'],
            $button
        );
    }
    echo json_encode($output);
