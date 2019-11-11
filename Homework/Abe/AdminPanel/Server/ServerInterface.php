<?php
namespace AdminPanel\Server;

interface AbstractServerInterface
{

    public function getName() : string ;

    public function getCurConns() : int ;

    public function getActivity();

    public function setName($name);

    public function setCurConns($curConns);

    public function setActivity(array $activity);

    public function addActivity(Entry $entry);	

}
