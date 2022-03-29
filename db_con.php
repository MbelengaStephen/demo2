<?php
$sv_name = "localhost";
$user= "root";
$db_password = "";
$db_name = "test_db";

$conn = mysqli_connect($sv_name, $user, $db_password, $db_name);

if(!$conn){
    echo "Connection Failed.";
}
?>
