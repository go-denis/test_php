<?php

$arrayMonth = [
    [
        1 => 'Январь',
        2 => 'Февраль',
        3 => 'Март'
    ],
    [
        1 => 'Апрель',
        2 => 'Май',
        3 => 'Июнь'
    ]
];

foreach ($arrayMonth as $key){

    foreach ($key as $val){
        echo $val.PHP_EOL;
    }
    
}