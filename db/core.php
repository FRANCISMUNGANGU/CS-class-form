<?php
//connect to database
$connection = mysqli_connect('localhost', 'root', '','CS');
//$c = "SELECT * FROM `users` WHERE `email` = 'francismungangu@gmail.com'";//' AND `password` = 'zzzzzz'";
if(!$connection)
{
    header("location:../form.php?msg=10001>>something went wrong");
    die();
}
?>