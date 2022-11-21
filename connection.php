<?php
error_reporting(1);
$db= mysql_connect("localhost", "root","", "poll","3307") or die(mysqli_error($db));
$con=$db;
mysql_select_db($db, "poll") or die(mysqli_error($db));
?>