<?php
spl_autoload_register(function($class) {
	require 'src/Raket/'.$class.'.php';
});

$class = new TestClass();
var_dump($class);