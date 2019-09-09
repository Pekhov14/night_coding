<?php

// определить ip

require_once __DIR__ . '/functions.php';

$ip = '100.10.20.30';

$allowed_ips = [
    '125.0.0.5',
    '100.10.20.*',
    '127.0.0.1'
];

if( !getAccessIp($ip, $allowed_ips) ) {
    die('Access forbidden');
}else {
    echo 'Access granted';
}