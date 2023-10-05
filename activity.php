<?php
include_once(__DIR__.'/views/header.html');
include_once(__DIR__.'/views/navbar.html');
include_once(__DIR__.' /views/table.php');


$_host = "127.0.0.1";
$_password = "";
$_username = "root";
$_database = "login_system";

$conn=new mysqli(
    $_host,$_username,$_password,$_database
);
if($conn->connect_error) {
    exit("error connecting");
}
print("connected..<br>");

// exec query (SQL)
// create
$query = "INSERT INTO `users`( `name`, `password`) VALUES ('haeuna123','haruna@gmail.com')";
$conn->query($query);









?>
