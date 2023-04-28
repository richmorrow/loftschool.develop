<?php
// Запросы к базе данных MySql при помощи PHP
require_once 'setting.php';

// подключение к MySql
$connection = new mysqli($host, $user, $pass, $data);
if ($connection->connect_error) die('Error connection');

// запрос данных
$query = "SELECT * FROM users";
$result = $connection->query($query);

if (!$result) die ('Error SELECT');

$rows = $result->num_rows;

for ($i = 0; $i < $rows; ++$i){
    $result->data_seek($i);
    echo "Name: " . $result->fetch_assoc()['name'] . '<br>';
}

// Закрытие запроса
$result->close();
$connection->close();

// echo '<pre>';
// print_r($rows);
// echo '</pre>';


?>