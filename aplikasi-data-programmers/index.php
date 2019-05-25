<?php
$configs = array(
    'database' => 'daftar_programmer',
    'host' => 'localhost',
    'username' => 'root',
    'password' => ''
);

$mysqli = new mysqli($configs['host'], $configs['username'], $configs['password'], $configs['database']);
$query1 = "SELECT * FROM users";
$result1 = $mysqli->query($query1);

include_once('front.php');