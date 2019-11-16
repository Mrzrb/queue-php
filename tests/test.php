<?php

require_once '../vendor/autoload.php';

use Queue\QueueJob;


$job = new QueueJob();
$job->onConnection("test")->onQueue("test")->delay(time()+5);
