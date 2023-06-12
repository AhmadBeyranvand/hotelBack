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
$data = ["name"=>"Ahmad"];
returnJSON($data);
?>