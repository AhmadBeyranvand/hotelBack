<?php
require("../config.php");
$query = "";
$conditionsArray = [];
if (isset($_GET['hasFood'])){   array_push($conditionsArray, ['hasFood'=>true]); }
if (isset($_GET['hasSwim'])){   array_push($conditionsArray, ['hasSwim'=>true]); }
if (isset($_GET['hasAC']))  {   array_push($conditionsArray, ['hasAC'=>true]);   }
if (isset($_GET['hasWifi'])){   array_push($conditionsArray, ['hasWifi'=>true]); }

$query = "
select h.* , l.location_name , t.type_name 
from hotels as h
inner join locations as l
on h.location_id = l.id 
inner join typeOfHotels as t
on h.type_id = t.id 
where h.type_id =" . $type ; 
returnJSON(getMultiField($query));