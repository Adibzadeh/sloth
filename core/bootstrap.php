<?php

foreach (glob(__DIR__ . "/*.php") as $file) {
    require_once $file;
}

$apiPath = dirname(__DIR__) . "/api/*.php";
foreach (glob($apiPath) as $file) {
    require_once $file;
}
