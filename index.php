<?php

require "functions.php";

$task = [
	'title' => 'Homework',
	'due' => 'today',
	'assigned_to' => 'Tim',
	'completed' => true
]; 

dd($task);

require 'index.view.php';