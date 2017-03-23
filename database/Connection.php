<?php

class Connection
{
	public static function make() 
	{
		try {
			return new PDO('pgsql:host=127.0.0.1;dbname=mytodo', 'postgres', 'password');
		} catch (PDOException $e) {
			dd($e->getMessage());
		}
	}
}