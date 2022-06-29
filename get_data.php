<?php

    header('Access-Control-Allow-Origin: *');

    $myfile = fopen("db.txt", "r") or die("Unable to open file!");

    $array = [];

    if ($myfile) {

        while (($line = fgets($myfile)) !== false) {
            $line = str_replace(PHP_EOL, '', $line);
            $data_array = explode(" :: ", $line);
            $data = new stdClass();
            $data->id = (int)$data_array[0];
            $data->brand = $data_array[1];
            $data->name = $data_array[2];
            $data->info = $data_array[3];
            $data->price = (int)$data_array[4];
            $data->quantity = (int)$data_array[5];
            
            array_push($array, $data);
        }

        fclose($myfile);
    }

    echo json_encode($array);