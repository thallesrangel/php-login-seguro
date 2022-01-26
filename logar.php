<?php

$pdo = new PDO('mysql:host=login-db;dbname=users', 'user', 'root');

$email = 'lorena@gmail.com';
$passwordString = '123';


$sql = 'SELECT * FROM  user WHERE email = ?;';
$stm = $pdo->prepare($sql);
$stm->bindValue(1, $email);
$stm->execute();

$usuario = $stm->fetch(\PDO::FETCH_ASSOC);

if (password_verify($passwordString, $usuario['password'])) {
    echo "Usuário logado\n";
} else {
    echo "Email ou senha incorretos\n";
};