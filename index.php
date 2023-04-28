<?php

require_once 'setting.php';

$connection = new PDO("mysql:host=localhost;dbname=test;charset=utf8","root","");

// запись данных
$query = "INSERT users (name, age, login, password) VALUE ('Leslie', '23', 'lesl223', '123')";
$count = $connection->exec($query);

echo $count;