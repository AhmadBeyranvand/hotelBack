<?php
require("../config.php");
$query = "
select h.* , l.location_name , t.type_name 
from hotels as h
inner join locations as l
on h.location_id = l.id 
inner join typeOfHotels as t
on h.type_id = t.id 
";

returnJSON(getOneField($query));