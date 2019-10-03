<?php

require_once 'classes/Connection.php';
require_once 'classes/QueryBuilder.php';


$db = new QueryBuilder(Connection::make());

$users = $db->select('users');
$posts = $db->select('posts');

var_dump($users, $posts);
