<?php
// Abe: Service monitoring

namespace AdminPanel\Entry;

use AdminPanel\Entry\AbstractEntryInterface;

/*
 * The idea behind this is to be able to monitor services throughout a server on an admin panel.
 *
*/

/*
 * Entry is an instant of a log.
 * @param string    $ip        The ip address associated with the log
 * @param string    $logtime   The time in which the log was created.
 * @param string    $log       The actual log from the src
 */
abstract class AbstractEntry implements AbstractEntryInterface
{
    protected $ip, $logtime, $log;

    public function __construct($ip, $logtime, $log)
	{
        $this->setIP($ip);
        $this->setLogTime($logtime);
        $this->setLog($log);
    }

    public function getIP() : string
	{
        return $ip;
    }

    public function getLogTime() : string
	{
        return $logtime;
    }

    public function getLog() : string
	{
        return $log;
    }

    public function setIP($ip)
	{
        $this->ip = $ip;
    }

    public function setLogTime(string $logtime)
	{
        $this->logtime = $logtime;
    }

    public function setLog(string $log)
	{
        $this->log = $log;
    }

    public abstract function __toString() : string;

}
