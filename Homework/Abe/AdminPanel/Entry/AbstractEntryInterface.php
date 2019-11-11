<?php
namespace AdminPanel\Entry;

interface AbstractEntryInterface
{
	public function getIP() : string;

	public function getLogTime() : string;

	public function getLog() : string;
	
	public function setLogTime(string $logtime);
	
	public function setLog(string $log);

}
