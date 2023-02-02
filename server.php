<?php
    //1 - recupero il contenuto da todo-list.json
    $string = file_get_contents('todo-list.json');
    
    //2 - converto la stringa in array associativo
    $array_list = json_decode($string, true);

    //2.1 - aggiungo un nuovo elemento all'array associativo
    if(isset($_POST['task'])){
        //creo i dati da passare all'array, recuperando il dato in input
        $task = $_POST['task'];
        $done = false;
        
        //creo l'array
        $array_task = [
            "task" => $task,
            "done"  => $done,
        ];

        //aggiungo l'array appena creato a quelli esistenti del file json
        $array_list[] = $array_task;
        
        //scrivo il dato all'interno del file json
        file_put_contents('todo-list.json', json_encode($array_list, JSON_PRETTY_PRINT));
    }

    //3 - codifico in formato json l'array
    header('Content-Type: application/json');
    echo json_encode($array_list);
?>