<?php

//connect to database
require_once( $_SERVER['DOCUMENT_ROOT']."/CS/db/core.php");



$studentName = mysqli_real_escape_string($connection, $_POST['name']);
$studentRegNo = mysqli_real_escape_string($connection, $_POST['regNo']);
$cregNo = mysqli_real_escape_string($connection, $_POST['cregNo']);

if(empty($studentName) OR empty($studentRegNo)){
    header("location:../index.php?msg=Please fill all fields");
    die();
}

//checking password is similar to confirm password
if($studentRegNo !== $cregNo)
{
    header("location:../index.php?msg=Registration Numbers do not match");
    die();
}

$duplicateCheck = mysqli_query(
    $connection,
    "SELECT * FROM `students` WHERE `RegNo` = '$studentRegNo'"
);
$existingRecords = mysqli_num_rows($duplicateCheck);
if($existingRecords > 0)
{
    header("location:../index.php?msg=The Registration already exists, please try another one or contact Francis");
    die();
}

$insert = mysqli_query(
    $connection,
    "INSERT INTO `students`(`name`, `regNo`)
                      VALUE('$studentName', '$studentRegNo')"
);

if($insert){
    header("location:../index.php?success=Values insterted successfully");
    die();
}
?>