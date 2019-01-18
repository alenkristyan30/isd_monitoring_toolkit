<?php
    session_start();
    include '../../config/database.php';
    $questionid = $_POST['questionidtxt'];
    $query = $_POST['questionquerytxt'];
    $action = $_POST['action'];
    $id = $_POST['id'];
    if ($action == 'Add'){
        mysqli_query($connect, "INSERT INTO tblquestion ( questionID , questionQUERY )VALUES( '$questionid' , '$query' )");
        echo 'Added Successfully';
    }
    if ($action == 'Edit') {
        mysqli_query($connect, "UPDATE tblquestion SET questionID = '$questionid' , questionQUERY = '$query' WHERE questionID = $id");

        echo 'Update Successfully';
    }
    if ($action == 'Delete') {
        mysqli_query($connect, "DELETE FROM tblquestion WHERE questionID = $id");
        echo 'Delete Successfully';

    }
