<?php

class ProfileOptions 
{
    var $name = "Bobby";
    var $email = "bob@gmail.com";
}

class Profile
{
    private $name;
    private $email;

    public function __construct(ProfileOptions $options)
    {
        $this->name = $options->name;
        $this->email = $options->email;
    }

    public function info()
    {
        return "$this->name is with $this->email";
    }
}

// We use ProfileFactory class to create object
class ProfileFactory
{
    private $options;

    public function __construct($name,$email)
    {
        $options = new ProfileOptions();
        $options->name = $name;
        $options->email = $email;

        $this->options = $options;
    }

    public function build()
    {
        return new Profile ($this->options);
    }
}

$user = new ProfileFactory("Alice","alice@gmail.com");
$alice = $user->build();

echo $alice->info();
//Output : Alice is with alice@gmail.com