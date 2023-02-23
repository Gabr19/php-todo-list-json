<?php

    $toDoList = file_get_contents('database.json');

    $toDoListDecoded = json_decode($toDoList, true);

    $newTask = ['taskName' => $_POST['toDoList']['taskName']];

    $toDoListDecoded[] = $newTask ;
        

    $toDoListEncoded = json_encode($toDoListDecoded);

    file_put_contents('database.json', $toDoListEncoded);

    $response = [
        'success' => true,
        'message' => 'ok',
        'code' => 200,
        'toDoList' => $newTask 
    ];

    $responseEncoded = json_encode($response);
    header('Content-Type: application/json');

    echo $responseEncoded;
?>