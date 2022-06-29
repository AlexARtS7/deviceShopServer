<?php

    header('Access-Control-Allow-Origin: *');

    $lines = file('db.txt', FILE_IGNORE_NEW_LINES);
    foreach($lines as $key => $line) {
        $id_line = explode(" :: ", $line)[0];
        if($id_line === $_GET['id']) unset($lines[$key]);
    }
    $data = implode(PHP_EOL, $lines);
    file_put_contents('db.txt', $data);
    
    

    // echo json_encode($array);