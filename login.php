<?php
session_start();
include "db_con.php";

if (isset($_POST["username"]) && isset($_POST["password"])){
    function validate ($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
    return $data;

    }
}

$username = validate($_POST["username"]);
$password = validate($_POST["password"]);

if (empty($username)){
    header("Location: index.php?error=User Name is Required.");
    exit();
}
elseif(empty($password)){
    header("Location: index.php?error=Password is Required.");
    exit();
}

$sql = "SELECT * FROM `users` WHERE `username`='$username' AND `password`='$password' ";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) === 1){
    $row = mysqli_fetch_assoc($result);
    if ($row["username"] == $username && $row["password"] == $password){
        $_SESSION["username"] = $row["username"];
        $_SESSION["password"] = $row["password"];
        $_SESSION["id"] = $row["id"];
        header("Location: home.php");
        exit();
    }
    else{
        header("Location: index.php?error=Incorrect User Name or Password.");
        exit();
    }
}
else{
    header("Location: index.php");
    exit();
}
?>