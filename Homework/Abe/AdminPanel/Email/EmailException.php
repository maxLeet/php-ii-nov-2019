<?php 

namespace AdminPanel\EmailException;

class EmailException extends Exception
{

	public function __toString()
	{
		return "Malformed emailer format: [{$this->code}] {$$this->message}";
	}


}
