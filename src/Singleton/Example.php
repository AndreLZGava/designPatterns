<?php

namespace App\Singleton;

use \App\Singleton\Connection;

class Example
{

    public function demonstrate(): void
    {
        $connection = Connection::getInstance();
        $returnedAfterProcess = $connection->getCalledTimes(); //Called Times = 1 , new instances = 1
        $otherCall = Connection::getInstance();
        $returnedAfterReprocess = $otherCall->getCalledTimes(); //Called Times = 2 , new instances = 1
        // new \App\Singleton\Connection(); //can't call from another;
    }
}
