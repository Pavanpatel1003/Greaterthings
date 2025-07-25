<?php
// Set error reporting
error_reporting(0);
ini_set('display_errors', 0);

date_default_timezone_set('Asia/Kolkata');

$host = 'localhost';
$db = 'graterthings';
$user = 'graterthings';
$pass = 'graterthings';
//$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $connect = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}


$symbol  = "&#8377";

?>
