<?php

namespace AdminPanel\Server\Service;

interface ServiceInterface extends Service
{

	public function monitorOn();

	public function monitorOff();

	public function setHeartbeat(int $sec);

	public function getHeartbeat();

}


