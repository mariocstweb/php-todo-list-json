<?php

$source_path = __DIR__ .'/../database/data.json';

$tasks = file_get_contents($source_path);

header('Content-Type: application/json');

// echo json_encode($tasks);
echo $tasks;
