<?php

function getCsvFile() {

    $read = fopen('todo.csv', 'r');
    $todo = [];

    $i = 0;

    while (($a=fgetcsv($read)) != false) {
        $todo[] = [
            'title' => $a[0],
            'description' => $a[1],
            'deadline' => $a[2],
            'priority' => $a[3],
            'done' => $a[4]
        ];
        $i++;
    }
    fclose($read);
    //var_dump($todo);
    return $todo;
}

function addToCsv($title, $description, $deadline, $priority) {
    $write = fopen('todo.csv','a');
    fputcsv($write, [
        $title,
        $description,
        $deadline,
        $priority,
        'not'
    ]);
    fclose($write);
}

function addArrayToCsv($todo) {
    //var_dump($todo);die();
    $write = fopen('todo.csv','w');
    foreach ($todo as $value) {
        fputcsv($write, [
            $value['title'],
            $value['description'],
            $value['deadline'],
            $value['priority'],
            $value['done']
        ]);
    }
    fclose($write);
}

 ?>
