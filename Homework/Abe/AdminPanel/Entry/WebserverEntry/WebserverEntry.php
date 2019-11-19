<?php 

namespace AdminPanel\Entry;

class WebserverEntry extends AbstractEntry
{

	public function __toString() : string
	{
		return "TIME: " . $this->getLogTime . " IP: " . $this->getIP() . " LOG: " . $this->getLog();	
	}

}
