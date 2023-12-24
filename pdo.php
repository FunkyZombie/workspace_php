<?php

$pdo = include "db.php";

$pdo->exec('CREATE TABLE `users` (
    id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
    name VARCHAR(150),
    username VARCHAR(100) NOT NULL,
    password VARCHAR(100) NOT NULL
)');

$pdo->exec('CREATE TABLE tasks (
    id  INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
    userId  INTEGER,
    description  VARCHAR(100),
    isDone  TINYINT default 0
)');

// $statement = $pdo->query($query);
