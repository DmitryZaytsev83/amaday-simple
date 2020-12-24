<?php
$uri = $_SERVER['REQUEST_URI'];
$uri_arr = explode('/', $uri);
if ($uri_arr[1] === 'main' || $uri_arr[1] === '') {
    echo file_get_contents('main.html');
} else if ($uri_arr[1] === 'video') {
    echo file_get_contents('video.html');
} else 'file not found';
