<?php
require("./config.php");
$user = $_GET['username'];
$pass = $_GET['password'];
$first = $_GET['firstName'];
$last = $_GET['lastName'];
$email = $_GET['email'];

$query = "SELECT * FROM users WHERE `username`='$user' OR `email`='$email'";
if( getOneField($query) ){
    returnJSON(["message"=>"کاربر از قبل موجود است! لطفا نام کاربری و یا ایمیل دیگری وارد کنید"]);
} else {
    $query = "INSERT INTO users (`username`, `password`, `firstName`, `lastName`, `email`) VALUES('$user', '$pass', '$first', '$last', '$email')";
    returnJSON( runQuery( $query));
}
