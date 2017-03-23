<?php

return [
	'database' => [
		'name' => 'mytodo',
		'username' => 'postgres',
		'password' => 'password',
		'connection' => 'pgsql:host=127.0.0.1',
		'options' => [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
	]
];