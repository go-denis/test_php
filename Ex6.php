<?php

/*
Соединение к базе лучше писать в таком виде по порядку:
mysqli_connect(host, username, password, dbname, port, socket)

Точно наверное не скажу, выполнитться подключение или нет, скорее всего выдаст ошибку

Запрос в примере пытается получить всю таблицу юзеров и записать
*/

$host = 'local';
$username = 'root';
$password = '123';
$dbname = 'data';
$port = '5445';

mysqli_connect($host, $username, $password, $dbname, $port);
//Способ 1, самый лучший на мой взгляд
$sql = "DELETE from tablename WHERE id IN (1,2,3,4,5)";
mysqli_query($conn, $sql);
//Способ 2, не самый лучший
$sql2 = "DELETE from tablename WHERE id BETWEEN 1 AND id <= 10;";
mysqli_query($conn, $sql2);
//И тд...