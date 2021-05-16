<?php

class ProfileBuilder
{
    private $name;
    private $phone;

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function setPhone($phone)
    {
        $this->phone = $phone;
        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPhone()
    {
        return $this->phone;
    }

    function build()
    {
        return new Profile($this);
    }
}

class Profile
{
    public $name;
    public $phone;

    public function __construct(ProfileBuilder $pb)
    {
        $this->name = $pb->getName();
        $this->phone = $pb->getPhone();
    }

    static function builder()
    {
        return new ProfileBuilder();
    }
}

$user = Profile::builder()
            ->setName("Alice")
            ->setPhone("123456")
            ->build();

var_dump ($user);