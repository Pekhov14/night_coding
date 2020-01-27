<?php

try {
	$pdo = new PDO('mysql:host=localhost;dbname=load_on_select;charset=utf8',
		'root',
		'',
		[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
	);
} catch (PDOException $e) {
	die('Немогу подключиться');
}
