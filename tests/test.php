<?php

require_once '../vendor/autoload.php';

use Illuminate\Redis\Database;
use Queue\Queue\Bus\Dispatcher;
use Queue\Queue\Connections\RedisQueue;
use Queue\QueueJob;


$job = new QueueJob();
$job->onQueue("default")->delay(5);
echo time()+5;


$conn = new Database([
    "default" => [
        "host" => "localhost",
        "port" => 6379,
    ]
]);

$dispatcher = new Dispatcher(function() use ($conn){
    return new RedisQueue($conn);
});

$dispatcher->dispatch($job);
