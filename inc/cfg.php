<?php
try{
	$pdo = new PDO('mysql:host=localhost;dbname=umbrella', 'root', '');
} catch (PDOExpertion $e) {
	exit($e->getMessage());
}
?>