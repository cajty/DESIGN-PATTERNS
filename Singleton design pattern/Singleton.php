
<?php
class Singleton {
    private static $database;

    private function __construct() {
    }

    public static function getInstance() {
        if (!self::$database) {
            self::$database = new Singleton();
        }
        return self::$database;
    }

}


$singletonInstance1 = Singleton::getInstance();
$singletonInstance2 = Singleton::getInstance();

