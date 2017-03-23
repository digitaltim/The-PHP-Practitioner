<?php

require "functions.php";

try {
	$pdo = new PDO('pgsql:host=127.0.0.1;dbname=mytodo', 'postgres', 'password');	
} catch (PDOException $e) {
	dd($e->getMessage());
}

$statement = $pdo->prepare('select * from todos');

$statement->execute();

$tasks = $statement->fetchAll(PDO::FETCH_OBJ);

require 'index.view.php';