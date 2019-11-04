<?php
class UserEntity
{
    protected $firstName, $lastName;

    public function getFirstName() {
        return $this->firstName;
    }

    public function getLastName() {
        return $this->lastName;
    }
    public function setFirstName($name) {
        $this->firstName = $name;
    }

    public function setLastName($name) {
        $this->lastName = $name;
    }

	public function getFullName()
	{
		return $this->firstName . ' ' . $this->lastName;
	}
}

$user = new UserEntity;
$user->setFirstName('Fred');
$user->setLastName('Flintstone');
echo $user->getFullName();
