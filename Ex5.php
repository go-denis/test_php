<?php

$json = '{"years":[1997,1998,1999,2000,2001,2002,2003,2004,2005,2006,2007,2008,2009,2010]}';
$array = json_decode($json);

//Вывод json с проверкой на всякий случай
if( $json != false && !is_null($array)){
    foreach($array->years as $key => $value){
        echo $value.PHP_EOL;
    }
}