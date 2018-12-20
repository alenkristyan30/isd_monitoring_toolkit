<?php
require_once ("../config/database.php");
session_start();
if(empty($_SESSION['id'])) {
    header('location:../dashboard/');
    exit();
}
if(isset($_SESSION['id'])) { ?>


<?php
$user_id = $_SESSION['id'];
$sql = "SELECT * FROM useracc WHERE id = $user_id";
$query = $connect->query($sql);
$result = $query->fetch_array();
$user = $result["id"];
//$connect->close();
}
?>
