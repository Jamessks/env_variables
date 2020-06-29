<?php
//test query function
function getUsers()
{
    $pdo = include 'db_config.php';
    $stmt = $pdo->query('SELECT * FROM users');
    return $stmt->fetchAll(PDO::FETCH_OBJ);
}