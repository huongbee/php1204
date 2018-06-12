<?php

require_once 'DBConnect.php';

// $sql = "INSERT INTO bill_detail(id_bill,id_product,quantity, price) 
//         VALUES (?,?,?,?)";
// $params = [3,5,6,20000];
// $c = new DBConnect;
// $check = $c->executeQuery($sql,$params);
// var_dump($check);

// $sql = "DELETE FROM bill_detail WHERE id=26";

// $c = new DBConnect;
// $check = $c->executeQuery($sql);
// var_dump($check);

$sql = "SELECT * FROM users WHERE id=2";
$c = new DBConnect;
$data = $c->loadOneRow($sql);
print_r($data);


?>