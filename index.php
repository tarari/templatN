<?php
	
	namespace TemplatN;
	ini_set('display_errors',1);
	
	define('DS',DIRECTORY_SEPARATOR);

	
	require 'autoload.php';
	
	spl_autoload_register( __NAMESPACE__ .'\Autoload::loader');

	use TemplatN\TemplN;

	$app=new Templn('default.html.tpl');
