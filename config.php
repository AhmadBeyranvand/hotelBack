<?php
$host = "localhost";
$db = "beyranHotel";
$user = "ahmad";
$pass = "1881";

$con = new mysqli($host, $user, $pass, $db);

function returnJSON($array=[]){
    header("Content-Type:application/json");
    header("Acces-Control-Allow-Origin: *");
    
    echo json_encode($array);
}
// $data = ["name"=>"Ahmad"];
// returnJSON($data);
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
returnJSON(getOneField("Select * from hotels"));
?>