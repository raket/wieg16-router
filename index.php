<?php

require 'functions.php';

$routes = [];
$routes[] = route('/whatever', function () {
	return "whatever";
});

$response = dispatch($routes);
if ($response['match']) {
	echo $response['output'];
}
else {
	header('HTTP/1.0 404 Not Found');
	echo 'Page not found';
}