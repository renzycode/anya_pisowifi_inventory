<?php

$host = 'localhost';
$user = 'root';
$password = '';
$db = 'anyadb';

try {
	$pdo = new PDO("mysql:host=".$host.";dbname=".$db.";charset=UTF8", $user, $password);

	if ($pdo) {
		//echo "<script> console.log('Connected to the ".$db." database successfully!') </script>";
	}
} catch (PDOException $e) {
	echo $e->getMessage();
}