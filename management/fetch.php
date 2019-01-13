<?php
    include '../config/database.php';
    $id = $_POST['id'];
    $sql = mysqli_query($connect, "SELECT tbluserinfo.userinfoID , useraccountUSERNAME , userinfoFIRSTNAME , userinfoMIDDLENAME , userinfoSURNAME , userinfoGENDER , userinfoSERVICELENGTH ,
      usertypeID , officeID , divisionID , positionID , sectionID , unitID FROM tbluserinfo
      INNER JOIN tbluseraccount ON tbluseraccount.useraccountID = tbluserinfo.userinfoID
      INNER JOIN tbloffice ON tbloffice.officeID = tbluserinfo.userinfoOFFICE
      INNER JOIN tblusertype ON tblusertype.usertypeID = tbluseraccount.useraccountTYPE
      INNER JOIN tbldivision ON tbldivision.divisionID = tbluserinfo.userinfoDIVISION
      INNER JOIN tblsection ON tblsection.sectionID = tbluserinfo.userinfoSECTION
      INNER JOIN tblposition ON tblposition.positionID = tbluserinfo.userinfoPOSITION
      INNER JOIN tblunit ON tblunit.unitID = tbluserinfo.userinfoUNIT WHERE tbluserinfo.userinfoID = $id");
    $row = mysqli_fetch_assoc($sql);
    $output = array(
        "username" => $row['useraccountUSERNAME'],
        "firstname" => $row['userinfoFIRSTNAME'],
        "middlename" => $row['userinfoMIDDLENAME'],
        "surname" => $row['userinfoSURNAME'],
        "gender" => $row['userinfoGENDER'],
        "lservice" => $row['userinfoSERVICELENGTH'],
        "type" => $row['usertypeID'],
        "office" => $row['officeID'],
        "division" => $row['divisionID'],
        "position" => $row['positionID'],
        "section" => $row['sectionID'],
        "unit" => $row['unitID']
    );
    echo json_encode($output);
