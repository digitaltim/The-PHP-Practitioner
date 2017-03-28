<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'vendor/autoload.php';

require 'functions.php';

require 'core/bootstrap.php';

require Router::load('routes.php')
	->direct(Request::uri(), Request::method());