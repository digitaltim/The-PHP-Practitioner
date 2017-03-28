<?php

function dd($data)
{
	echo "<pre>";
	die(var_dump($data));
	echo "</pre>";
}

function view($name, $data = [])
{
	extract($data);

	return require "views/{$name}.view.php";
}

function redirect($path)
{
	return header("location: /{$path}");
}



