<?php

namespace AdminPanel\Server;

use AdminPanel\Entry;

interface ServerInterface extends Server
{

	public function getName() : string

	public function getCurConns() : int;
	
	public function getActivity() : string;

	public function setName(String $name);

	public function setCurConns(int $curConns); 
	
	public function setActivity(array $activity);

	public function addActivity(Entry $entry);

	public function getLog() : string ;

}
