<?php
require("../config.php");
$type = 1;
if (isset($_GET['type'])){
    $type = intval($_GET['type']);
}
$query = "
select h.* , l.location_name , t.type_name 
from hotels as h
inner join locations as l
on h.location_id = l.id 
inner join typeOfHotels as t
on h.type_id = t.id 
where h.type_id =" . $type ; 
returnJSON(getMultiField($query));