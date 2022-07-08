<?php
error_reporting(1);
$db= mysqli_connect('localhost', 'root','') or die(mysqli_error($db));
$con=$db;
mysqli_select_db($db, 'poll') or die(mysqli_error($db));
?>