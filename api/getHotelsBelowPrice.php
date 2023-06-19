<?php
require("../config.php");
$price = 99999999;
if (isset($_GET['price'])){
    $price = intval($_GET['price']);
}
$query = "
select h.* , l.location_name , t.type_name 
from hotels as h
inner join locations as l
on h.location_id = l.id 
inner join typeOfHotels as t
on h.type_id = t.id 
where h.price_per_night < " . $price ; 
returnJSON(getMultiField($query));