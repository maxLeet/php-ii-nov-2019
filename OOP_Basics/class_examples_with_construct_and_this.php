<?php
class Test
{
	protected $name;
	public function xyz()
	{
		$this->name = 'NAME';
		return $this->name;
	}
}

class Xyz
{
	public function __construct()
	{
		// do nothing
	}
	protected function xyz()
	{
		return 'XYZ';
	}
	public function whatever()
	{
		return $this->xyz();
	}
}


$test = new Test();
echo $test->xyz();
echo PHP_EOL;
$xyz = new Xyz();
echo $xyz->whatever();
echo PHP_EOL;
var_dump($xyz->__construct());
