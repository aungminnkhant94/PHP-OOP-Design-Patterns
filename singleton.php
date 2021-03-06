<?php

// This pattern ensures that only one object of its kind exists and 
// provides a single point of access to it for any other code . 

class Setting
{
    static $setting = null;

    public $dark = 0;
    public $display = 1;

    protected function __construct() //the construct did only once
    {

    }

    static function create()
    {
        if(!static::$setting) {      // check the obj already build or not
            static::$setting = new static;
        }

        return static::$setting;
    }
}

$setting1 = Setting::create();
$setting1->dark = 1;
$setting1->display = 22;
print_r ($setting1);

echo "</br>";

$setting2 = Setting::create();      // setting2 is not new obj
echo $setting2->dark;               // its dark value is one the same as $setting1->dark
print_r($setting2);