<?php

$pdo = new PDO('mysql:host=login-db;dbname=users', 'user', 'root');

$email = 'lorena@gmail.com';
$passwordString = '123';

$passwordHash = password_hash($passwordString, PASSWORD_ARGON2ID);

$sql = 'INSERT INTO user (email, password) VALUES (?, ?);';
$stm = $pdo->prepare($sql);
$stm->bindValue(1, $email);
$stm->bindValue(2, $passwordHash);
$stm->execute();

