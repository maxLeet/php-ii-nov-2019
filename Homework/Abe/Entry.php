<?php
// Abe: Service monitoring
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
class Entry
{
    protected $ip, $logtime, $log;

    public function __construct($ip, $logtime, $log){
        $this->setIP($ip);
        $this->setLogTime($logtime);
        $this->setLog($log);
    }

    public function getIP(){
        return $ip;
    }

    public function getLogTime(){
        return $logtime;
    }

    public function getLog(){
        return $log;
    }

    public function setIP($ip){
        $this->ip = $ip;
    }

    public function setLogTime($logtime){
        $this->logtime = $logtime;
    }

    public function setLog($log){
        $this->log = $log;
    }

    public function __toString(){
        return $this->logtime."\t".$this->ip."\t".$this->log.' '.PHP_EOL;
    }

}
