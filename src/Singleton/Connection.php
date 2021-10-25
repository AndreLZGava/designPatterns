<?php

namespace App\Singleton;

class Connection
{
    private static $instance;
    private static int $calledTimes = 0;
    private static int $newInstances = 0;
    private function __construct()
    {
    }

    public static function getInstance(): Connection
    {
        self::$calledTimes++;
        if (self::$instance !== null) {
            return self::$instance;
        }
        self::$newInstances++;
        self::$instance = new Connection();
        return self::$instance;
    }

    public function connect()
    {
        //from this now I could implement connection based on driver, to every kind of database
    }

    public function getCalledTimes(): array
    {
        return [
            'calledTimes' => self::$calledTimes,
            'newInstances' => self::$newInstances,
        ];
    }
}
