<?php
require_once ("../config/database.php");
session_start();
// check if user is not logged in
if(empty($_SESSION['user_id'])) {
    header('location:../login/');
    exit();
}
if(isset($_SESSION['user_id'])) { ?>


<?php
$user_id = $_SESSION['user_id'];
$sql = "SELECT * FROM useracc WHERE id = $user_id";
$query = $connect->query($sql);
$result = $query->fetch_array();
$user = $result["id"];
// close database connection
//$connect->close();
}
?>
