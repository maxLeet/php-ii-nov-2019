<?php
class EntryException extends Exception {

 public function __construct($message = "", $code = 0, Throwable $previous = null)
 {
 parent::__construct($message, $code, $previous);
 }
 public function __toString(){
 return "Not of class Entry: [{$this->code}]: {$this->message}\n";
 }
}

class Test
{
 public function testing(Entry $e)
 {
 if ($e instanceof WebEntry) {
 new EntryException('Entry is not of right type. ');
 echo "yes";
 }
 elseif ($e instanceof AppEntry) {
 new EntryException('Entry is not of right type. ');
 echo "no";
 } else
 echo "Done.";
 }
}

abstract class Entry {
 public $msg = "1";
 public function test(){
 echo $this->msg;
 }
}

class WebEntry extends Entry {
 public $msg = "2";
 public function test(){
 echo $this->msg;
 }
}

class AppEntry extends Entry {
 public $msg = "3";
 public function test(){
 echo $this->msg;
 }
}

$a = new Test();
$b = new WebEntry();
try {
 $a->testing($b);
}catch(EntryException $e){
 echo "Exception caught";
 echo $e;
}

