<?php
class UserEntity {
    protected $firstName, $lastName;
    public function __construct(string $firstName , string $lastName)
    {
        $this->firstname = $firstName ;
        $this->lastname = $lastName ;
    }
    public function getFullName() : string
    {
		return $this->firstname . ' ' . $this->lastname;
	}
	public function toArray()
	{
		return get_object_vars($this);
		//return get_class_vars(__CLASS__);
	}
}

// Now for the instances
$user = new UserEntity('Jack' , 'Ryan');
var_dump($user->toArray());
echo PHP_EOL;
