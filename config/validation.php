<?php
// check connection
require_once '../config/database.php';
session_start();
// check if users already logged in
if(isset($_SESSION['user_id'])) {
    header('location:../dashboard/');
    exit();
}
if( !empty($_POST) ) {
    $errors = array();
    $username = $_POST['username'];
    $password = $_POST['password'];
    if( empty($username) == true OR empty($password) == true ) {
        $errors[] = '* Username/Password field is required';
    }
    else {
        // if username exists
        $sql = "SELECT * FROM useracc WHERE username = '$username'";
        $query = $connect->query($sql);
        if( $query->num_rows > 0 ) {
            // check username and password
            $password = md5($password);
            $sql = "SELECT * FROM useracc WHERE username = '$username' AND password = '$password'";
            $query = $connect->query($sql);
            $result = $query->fetch_array();
            $connect->close();
            if($query->num_rows == 1) {
                $_SESSION['logged_in'] = true;
                $_SESSION['user_id'] = $result['id'];
                header('location:../dashboard/');
                exit();
            }
            else {
                $errors[] = ' * Username/Password combination is incorrect';
            }
        }
        else {
            $errors[] = ' * Username doesn\'t exists';
        }
    }
}
?>
