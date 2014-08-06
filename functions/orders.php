<?php

function get_alls ($id) {

$sql = '
SELECT id, product_title, product_price
FROM orders
';


$result = db_select($sql);
return $result;



}
