<?php

namespace AdminPanel\WebServer;

class WebServer extends Server 
{
	public function getLog(){
		return "SERVERNAME: ". $this->getName() . " REQUEST: " . $this->getLog();
	}

}
