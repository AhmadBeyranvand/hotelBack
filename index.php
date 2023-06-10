<?php
$url = explode("/hotelBack/",$_SERVER['REQUEST_URI']);

$route = [
    "allHotels" => "./api/getAllHotels.php",
    "hotelBelowPrice" => "./api/getHotelsBelowPrice.php"
];
// echo $url[1];
for($i=0; $i<sizeof(array_keys($route)); $i++ ) {
    if( $url[1] == array_keys($route)[$i]){
        require( array_values($route)[$i] );
    }
}
?>