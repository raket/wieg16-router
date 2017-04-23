<?php
use Raket\Routing\Route;
require "vendor/autoload.php";
$route = new Route();

function route($path, Callable $response) {
	$requestedPath = $_SERVER['REQUEST_URI'];
	if ($requestedPath == $path) {
		echo $response();
	}
}

route('/whatever', function() {
	return "whatever";
});
var_dump($_SERVER);