<?php

// Повернення масиву із значень одного стовпчика вхідного масиву

$records = [
    [
        'first_name' => 'Олег',
        'last_name' => 'Иванов',
    ],
    [
        'first_name' => 'Ольга',
        'last_name' => 'Смирнова',
    ]
];


$names = array_column($records, 'last_name');

print_r($names);