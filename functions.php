<?php

function route($path, Callable $response) {
	$requestedPath = $_SERVER['REQUEST_URI'];
	$returnResponse = ['match' => false, 'output' => ''];
	if ($requestedPath == $path) {
		$returnResponse['match'] = true;
		$returnResponse['output'] = $response();
	}
	return $returnResponse;
}

function dispatch($routes) {
	$matches = array_filter($routes, function($item) {
		return $item['match'] === true;
	});
	return (count($matches) > 0) ? array_shift($matches) : ['match' => false, 'output' => ''];
}