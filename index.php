<?php

memory_get_usage();

function pr($data_name, $data): void
{
    echo $data_name . var_dump($data);
    echo PHP_EOL . PHP_EOL;
}

$request_data = $_REQUEST ?? null;

$get_data = isset($_GET) ?? null;

$post_data = $_POST ?? null;

pr("ENV", $_ENV);
pr("POST", $post_data);
pr("GET", $get_data);
pr("REQUEST", $request_data);

pr("COOKIE", $_COOKIE);
pr("SESSION", $_SESSION);
pr("SERVER", $_SERVER);
pr("FILES", $_FILES);


memory_get_usage();


