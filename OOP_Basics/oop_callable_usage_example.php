<?php
class Events
{
	protected $listeners = [];
	public function addListener(string $event, callable $callback)
	{
		$this->listeners[$event][] = $callback;
	}
	public function trigger(string $event)
	{
		if (isset($this->listeners[$event])) {
			foreach ($this->listeners[$event] as $callback) {
				$callback();
			}
		}
	}
}

$events = new Events();
$label  = 'test';

$cb1 = function () { echo 1; };
function cb2()
{
	echo 2;
}
$cb3 = new class() { public function __invoke() { echo 3; } };
$cb4 = [1,2,3];

$events->addListener($label, $cb1);
$events->addListener($label, 'cb2');
$events->addListener($label, $cb3);
// if this is uncommented, error results as an array is not callable
//$events->addListener($label, $cb4);
$events->trigger($label);
