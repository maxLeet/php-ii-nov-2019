<?php
// subclasses might be different types of servers that need to be monitored:
// i.e. WebService class, MindCraftService class, etc.

namespace AdminPanel\Server\Service;

/*
 * Service is an extension of server. A service can be turned on for monitoring or turned off. It also keeps a heartbeat.
 * @param integar $heartbeat    Given an integer value of the last heartbeat.
 * @param bool $status          Boolean value that determines if the service is currently being monitored.
 */
class Service extends Server
{

    protected $heartbeat, $status;

    public function __construct($name, $status=false)
	{
		parent ::__construct($name);
		$this->status = $status;
    }

    public function monitorOn() : bool
	{
        $this->status = true;
    }

    public function monitorOff() : bool
	{
        $this->status = false;
    }

    public function setHeartbeat($sec)
	{
        $this->heartbeat = $sec;
    }

    public function getHeartbeat()
	{
	return $this->heartBeat;
    }

    public function getStatus()
    {
	    return $this->status;
    }

}
