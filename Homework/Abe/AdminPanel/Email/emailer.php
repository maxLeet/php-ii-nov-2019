<?php

namespace AdminPanel\Email;
use AdminPanel\EmailException; 

class Email
{
	public $headerinfo = array(
		'From' => 'abe@maxleetiz.ninja',
		'Reply-To' => 'abe@maxleetiz.ninja',
//		'X-Mailer' => 'PHP/' . phpversion()
	);	
	
	public $header = array(
		'to', 
		'subject' => 'Update on attempts', 
		'message',
		'info'
	);

	public function __construct(string $to)
	{
		$this->header['to'] = $to;
	}

	public function sendlog()
	{
		try{
			mail($this->header['to'], $this->header['subject'], $this->header['message'], $this->header['info']);
		}catch (EmailException $e)
		{
			echo "Something went terribly wrong here!".PHP_EOL;
			echo $e;
		}
	}

	public function prep(){	
		$today = date("M j");
		$command = "grep '$today' ssh_login.log";
		echo exec($command, $output).PHP_EOL;
		$attempts = sizeof($output)-1;
		$lastattempt = $output[$attempts];
		$this->header['message'] = "You have had $attempts attempts made. ".PHP_EOL. "Last attempt was: $lastattempt".PHP_EOL;
		$this->header['info'] = $this->headerinfo;
	}
}


$test = new Email("webmaster@maxleetiz.ninja");
$test->prep();
$test->sendlog();
