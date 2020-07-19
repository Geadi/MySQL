<?php

    /* new mysqli() Метод для подключения базы данных
    принимает 4 параметра 1.хостинг 2.имя-пользователя 3.пароль 4.база данных(табличка)
    $mysqli->close() закрывает базу данных для новых пользовател чтобы хостинг не перенагружался 
    $mysqli->query("SET NAMES 'utf8'") устанавливает кодировку*/
    $mysqli = new mysqli("localhost", "root", "", "mybase");
    $mysqli->query("SET NAMES 'utf8'");
    $mysqli->close();

?>