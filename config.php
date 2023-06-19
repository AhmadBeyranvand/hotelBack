<?php
$host = "localhost";
$db = "beyranHotel";
$user = "ahmad";
$pass = "1881";

$con = new mysqli($host, $user, $pass, $db);

header("Content-Type:application/json");
header("Access-Control-Allow-Origin: *");
function returnJSON($array=[]){
    
    echo json_encode($array);
}
function getMultiField ($query) {
    global $con;
    $query = $con->query($query);
    $data = [];
    while ($res = $query->fetch_assoc()) {
        array_push($data, $res);
    }
    return $data;
}
function getOneField ($query) {
    global $con;
    $query = $con->query($query);
    $res = $query->fetch_assoc();

    return $res;
}
function runQuery ($query) {
    global $con;
    $query = $con->query($query);
    return $query;
}
?>