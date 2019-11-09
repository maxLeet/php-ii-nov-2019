<?php

namespace AdminPanel\Entry;

abstract class AbstractEntryInterface
{

	public function getIP() : string;

	public function getLogTime() string;

	public function getLog() : string;
	
	public function setLogTime(string $logtime);
	
	public function setLog(string $log);

	public abstract function __toString() : string;

}
