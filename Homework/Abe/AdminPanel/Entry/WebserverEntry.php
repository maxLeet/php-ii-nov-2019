<?php 

namespace AdminPanel\Entry;

//use AdminPanel\Entry\AbstractEntry;
//use AdminPanel\Entry\AbstractEntryInterface;

class WebserverEntry extends AbstractEntry
{

	public function __toString() : string
	{
		return "TIME: ". $this->getLogTime." REQUEST: ". $this->getLog() . " FROM ". $this->getIP();
	}

}
