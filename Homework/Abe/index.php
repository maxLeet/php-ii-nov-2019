<?php
spl_autoload_register(
	function($class) {
		$filename = str_replace('\\', '/', $class) . '.php';
		require __DIR__ . '/' . $filename;
	}
);

use AdminPanel\Entry\ {WebserverEntry, GenericEntry};

//$server = new Server('PHP\ II');
$newWebServer = new WebserverEntry('192.168.0.1', '21:00:00', 'HTTP request: /GET /www-data/public/OrderApp/index.php');
$newGeneric   = new GenericEntry('192.168.0.2', '22:00:00', 'HTTP request: /POST /www-data/public/OrderApp/index.php');
//$newservice = new Service('Http', true);
//$newservice->addActivity($newlog);
//echo $newservice->getActivity();
echo $newWebServer;
echo PHP_EOL;
echo $newGeneric;
echo PHP_EOL;

