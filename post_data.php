<?php 

    header('Access-Control-Allow-Origin: *');

    $data = file('db.txt');
    $line = $data[count($data)-1];

    $id = explode(" :: ", $line)[0];
    $new_id = $id + 1;
    $data = $_POST;

    $new_line = '';
    $new_line .= $new_id;
    $new_line .= ' :: ';
    $new_line .= $data['brand'];
    $new_line .= ' :: ';
    $new_line .= $data['name'];
    $new_line .= ' :: ';
    $new_line .= $data['info'];
    $new_line .= ' :: ';
    $new_line .= $data['price'];
    $new_line .= ' :: ';
    $new_line .= $data['quantity'];

    $new_data = $new_line.PHP_EOL;
    $fp = fopen('db.txt', 'a');
    fwrite($fp, $new_data);

    return 'ok';




