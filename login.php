<?php
session_start();
require("./config.php");

$query = "SELECT * FROM users WHERE username='".$_GET['username']."' AND password='".$_GET['password']."'";

returnJSON(getOneField($query));
?>