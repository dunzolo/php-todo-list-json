<?php
    //1 - recupero il contenuto da todo-list.json
    $string = file_get_contents('todo-list.json');
    
    //2 - converto la stringa in array associativo
    $array_list = json_decode($string, true);

    //3 - codifico in formato json l'array
    header('Content-Type: application/json');
    echo json_encode($array_list);
?>