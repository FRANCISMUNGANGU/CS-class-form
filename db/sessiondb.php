<?php
// date
date_default_timezone_set("Africa/Nairobi");
//database session
session_start();
if(!isset($_SESSION['loggedin']))
{
    header("location:/CS/classreplogin.php");
    die();
}
require_once( $_SERVER['DOCUMENT_ROOT']."/CS/db/core.php");
$loggedUser = $_SESSION['loggedin'];
//to get user details
$select = mysqli_query(
    $connection,
    "SELECT * FROM `students` WHERE `regNo` = '$loggedUser'"
);
$user = mysqli_fetch_array($select);
?>