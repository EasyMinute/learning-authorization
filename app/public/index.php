<?php
$pdo = new PDO('mysql:dbname=learning;host=mysql', 'learning_user', 'Yuras231', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

$query = $pdo->query('SHOW VARIABLES like "version"');

$row = $query->fetch();

echo 'MySQL version:' . $row['Value'];

// Load Config
require_once '../config/config.php';
// Load Composer
require_once '../vendor/autoload.php';