<?php

function getAccessIp($ip, $allowed_ips) {
    foreach ($allowed_ips as $allowed_ip) {
        $pards_allowed = explode('.', $allowed_ip);
        $pards_current = explode('.', $ip);
        foreach ($pards_allowed as $k => &$item) {
            if($item == '*') {
                $item = $pards_current[$k];
            }
        }
        unset($item);
        $allowed_ip = implode('.', $pards_allowed);
        if($allowed_ip === $ip) {
            return true;
        }
    }
    return false;
}