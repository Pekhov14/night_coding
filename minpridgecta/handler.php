<?php

function seve_message() {
    $str = $_POST['name'] . ' | ' . $_POST['description'] . ' | ' . date('Y-m-d H:i:m') . "\n***\n";

    file_put_contents(FILE_MESSAGE, "$str", FILE_APPEND);
}

function get_message() {
//    return nl2br(file_get_contents(FILE_MESSAGE));
    return file_get_contents(FILE_MESSAGE);
}

function array_message($massage) {
    $massage = explode("\n***\n", $massage);
    array_pop($massage);
    return array_reverse($massage);
}

function get_format_message($massage) {
    return explode('|', $massage);
}

function print_arr($arr) {
    echo '<pre>' . print_r($arr, true) . '</pre>';
}
