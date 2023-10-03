<?php

//connect to database
require_once( $_SERVER['DOCUMENT_ROOT']."/CS/db/core.php");

session_start();

$classrepRegNo = "SCT211-0032/2023";

$studentName = mysqli_real_escape_string($connection, $_POST['name']);
$studentRegNo = mysqli_real_escape_string($connection, $_POST['regNo']);

if(empty($studentName) OR empty($studentRegNo)){
    header("location:../classreplogin.php?msg=Please fill all fields");
    die();
}

//checking password is similar to confirm password
if($studentRegNo !== $classrepRegNo)
{
    header("location:../classreplogin.php?msg=Registration number entered do not match the class rep's registration number");
    die();
}

$validate = mysqli_query(
    $connection,
    "SELECT * FROM `students` WHERE `name` = '$studentName' AND `regNo` = '$studentRegNo'"
);
$existingrecords = mysqli_num_rows($validate);

if($existingrecords > 0)
{
    $_SESSION['loggedin'] = $studentRegNo;
    header("location:../classrep.php");
}else{
    header("location:../classreplogin.php?msg=Something went wrong");
    die();
}

?>