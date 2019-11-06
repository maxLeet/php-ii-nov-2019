<?php
class UserEntity {
    protected $firstName, $lastName;
    public function __construct(string $firstName, string $lastName) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }
    public function getFullName()
    {
		return $this->firstName . ' ' . $this->lastName;
	}
}

// The subclass
class BadGuestUser extends UserEntity {
    public $role;
    public function __construct(string $role) {
        parent ::__construct($firstName, $lastName);
        $this->role = $role ;
    }

    // ...
}

class GoodGuestUser extends UserEntity {
    public $role;
    public function __construct(string $firstName, string $lastName, string $role) {
        parent ::__construct($firstName, $lastName);
        $this->role = $role ;
    }
    // ...
}

$user = new UserEntity('Fred','Flintstone');
echo $user->getFullName();

$guest = new GoodGuestUser('Fred','Flintstone', 'whatever');
echo $guest->getFullName();

// ERROR is thrown
//$guest = new BadGuestUser('whatever');
//echo $guest->getFullName();
