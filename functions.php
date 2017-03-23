<?php

function dd ($data) {
	echo "<pre>";
	die(var_dump($data));
	echo "</pre>";
}

function connectToDb() {
	try {
		return new PDO('pgsql:host=127.0.0.1;dbname=mytodo', 'postgres', 'password');	
	} catch (PDOException $e) {
		dd($e->getMessage());
	}
}


function fetchAllTasks($pdo) {
	$statement = $pdo->prepare('select * from todos');
	$statement->execute();
	return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
}
