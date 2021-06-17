<?php

$host = 'localhost';
$database = 'fastNoteDB';
$user = 'root';
$password = 'root';

$connection = mysqli_connect($host, $user, $password, $database) 
or die("Ошибка " . mysqli_error($connection)); 
