<?php

require_once '../vendor/autoload.php';

use Illuminate\Redis\Database;
use Queue\Queue\Bus\Dispatcher;
use Queue\Queue\Connections\RedisQueue;
use Queue\Queue\QueueManager;
use Queue\Queue\Worker;
use Queue\Queue\WorkerOptions;
use Queue\QueueJob;



$job = new QueueJob();
$job->onQueue("default")->delay(1);


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

$redisQueue = new RedisQueue($conn);

$manager = new QueueManager(null, $redisQueue);

$worker = new Worker($manager,  $dispatcher, null);

$options = new WorkerOptions(20, 128);

$worker->daemon("default", "default", $options);

