<?php
$databaseHost = "localhost";
$databseName = "user_management";
$databaseUsername = "root";
$databasePassword = "";

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databseName);
if(!$mysqli){
    die('Could not Connect My Sql:' .mysql_error());
 }


?>