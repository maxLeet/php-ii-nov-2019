<?php 

namespace AdminPanel\Entry;

class ApplicationEntry extends AbstractEntry
{

	public function __toString() : string
	{
		return "TIME: " . $this->getLogTime . " IP: " . $this->getIP() . " LOG: " . $this->getLog();	
	}

}
