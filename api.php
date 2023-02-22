<?php
$toDoList = file_get_contents('database.json');

$phptoDoList = json_decode($toDoList, true);

$response = [
    'success' => true,
    'message' => 'ok',
    'code' => 200,
    'toDoList' => $phptoDoList
];





$jsonToDoListResponse = json_encode($response, true);

 header('content-type: application/json');

 print_r($jsonToDoListResponse) ;

?>