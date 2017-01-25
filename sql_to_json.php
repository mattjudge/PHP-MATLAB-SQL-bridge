<?php

$hostname = $_GET['hostname'];
$username = $_GET['username'];
$password = $_GET['password'];
$querystr = $_GET['querystr'];
$dbname   = $_GET['dbname'];

// reference: https://phpdelusions.net/pdo

// for development:
ini_set('display_errors', 1);

// set up PDO
$dsn = "mysql:host=$hostname;dbname=$dbname;charset=utf8";
$opt = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

$success = false;

try {
    $pdo = new PDO($dsn, $username, $password, $opt);
	$data = $pdo->query($querystr)->fetchAll();
	$success = true;
} catch (PDOException $e) {
    $data = $e->getMessage();
}

$data = [$success, $data];

//echo '<pre>';
//var_dump($data);

// headers for not caching the results
header('Cache-Control: no-cache, must-revalidate');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');

// headers to indicate JSON result
header('Content-type: application/json');

// return RESTful json
echo json_encode($data);