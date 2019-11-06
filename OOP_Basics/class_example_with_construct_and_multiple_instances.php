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
}

// Now for the instances
$user[] = new UserEntity('Jack' , 'Ryan');
$user[] = new UserEntity('Monte' , 'Python');
$user[] = new UserEntity('James' , 'Bond');
foreach ($user as $obj) {
	echo $obj->getFullName();
	echo PHP_EOL;
}
var_dump($user);
