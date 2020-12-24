<?php
echo $_SERVER['REQUEST_URI'];
$arr = explode('/', $_SERVER['REQUEST_URI']);
foreach ($arr as $str) {
    echo "$str<br>";
}
