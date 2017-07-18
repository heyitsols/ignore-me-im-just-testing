<?php

$host = $_SERVER['HTTP_HOST'];

switch ($host) {
case "heroku.leaversmith.com":
    echo "works!";
    break;
case "bins.leaversmith.com":
    include('../bins/index.php');
    break;
}
