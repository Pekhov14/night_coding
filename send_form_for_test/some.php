<?php

$data = [
    "username"  => $_POST['username'],
    "userphone" => $_POST['userphone']
];

$connection = new PDO('mysql:host=127.0.0.1;dbname=pekhov', '*', '*');

// INSERT
$sql = 'INSERT INTO test (name, phone) VALUES (:username, :userphone)';
$statement = $connection->prepare($sql);
$statement->execute($data);
