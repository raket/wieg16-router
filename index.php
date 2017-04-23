<?php

function route($path, Callable $response) {
	$requestedPath = $_SERVER['REQUEST_URI'];
	if ($requestedPath == $path) {
		echo $response();
	}
}

route('/whatever', function() {
	return "whatever";
});