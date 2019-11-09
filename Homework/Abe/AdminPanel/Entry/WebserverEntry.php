<?php 

namespace AdminPanel\WebserverEntry;

class WebserverEntry extends AbstractEntry implements AbstractEntryInterface
{

	public function __toString() : string
	{
		return "TIME: ". $this->getLogTime." REQUEST: ". $this->getLog() . " FROM ". $this->getIP();
	}

}
