<?php
spl_autoload_register(
	function($class) {
		$filename = str_replace('\\', '/', $class) . '.php';
		require __DIR__ . '/' . $filename;
	}
);

$server = new Server('PHP\ II');
$newlog = new Entry('192.168.0.1', '21:00:00', 'HTTP request: /GET /www-data/public/OrderApp/index.php');
$newservice = new Service('Http', true);
$newservice->addActivity($newlog);
echo $newservice->getActivity();
