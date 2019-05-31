<?php
$host = '127.0.0.1';
$port = '3306';
$username = 'root';
$password = '';
$database = 'fun_refresh';
$link = new mysqli($host, $username, $password, $database, $port) or die($link->error_log);;
