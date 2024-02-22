<?php
// Converto in linguaggio Json
header('Content-Type: application/json', true);
// Path Json
$source_path = __DIR__ .'/../database/data.json';
// Recupero i contenuti json
$data_content = file_get_contents($source_path);

$tasks = $data_content;

// Nuovo task tramite POST
$new_task = $_POST['task'] ?? '';
if($new_task) {
  // Converto in php
  $tasks = json_decode($tasks, true);
  // Creo il nuovo oggetto
  $new_task = array(
    'id' => count($tasks) + 1,
    'text' => $new_task,
    'done' => false
  );
  // Pusho il nuovo task
  $tasks[] = $new_task;
  // Converto in json
  $tasks = json_encode($tasks);

  file_put_contents($source_path, $tasks);
}


// Task riconvertiti in json
echo $tasks;
