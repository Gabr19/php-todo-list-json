<?php
$toDoList = file_get_contents('database.json');

$toDoListDecoded = json_decode($toDoList, true);

$toDoListDecoded = [
    'success' => true,
    'message' => 'ok',
    'code' => 200,
    'toDoList' => $toDoListDecoded
];

$toDoListEncoded = json_encode($toDoListDecoded, true);

 header('Content-Type: application/json');

 print_r($toDoListEncoded) ;

?>