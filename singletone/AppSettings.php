<?php

class AppSettings
{
    private static ?self $instance = null;
    private static array $config;

    private function __construct(){}

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

$db= AppSettings::getInstance();
var_dump($db);


