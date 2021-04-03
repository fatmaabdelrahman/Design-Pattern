<?php

class AppSettings
{
    private static ?self $instance = null;
    private static array $config;

    private function __construct(){
        self::$config = parse_ini_file(__DIR__.'/config.ini', true);
    }

    // To prevent clone
    private function __clone(){}

    public static function getInstance(): self
    {
        if (is_null(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public static function getConfig(string $key)
    {
        return self::$config[$key] ?? null;
    }

}

// 1- $db=  new AppSettings(); => error because construct is error
$database= AppSettings::getInstance();
//var_dump($database::getConfig('Database'));
//var_dump($database::getConfig('Database')['portNumber']);
//var_dump($database::getConfig('Cache'));
//$database2= AppSettings::getInstance();
//var_dump($database, $database2);
// the same instance




// self refer to current class and  PHP self refers to the class members, but not for any particular object.
// This is because the static members(variables or functions) are class members shared by all the objects of the class.

