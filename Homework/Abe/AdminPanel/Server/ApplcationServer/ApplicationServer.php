<?php

namespace AdminPanel\ApplicationServer;

class ApplicationServer extends Server 
{
	{
		return "SERVERNAME: " . $this->getName() . " LOG: " . $this->getLog();
	}
}

