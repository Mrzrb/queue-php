<?php

namespace Queue;

use Queue\Interfaces\Queue\ShouldQueue;
use Queue\Traits\Dispatchable;
use Queue\Traits\InteractsWithQueue;
use Queue\Traits\Queueable;

class QueueJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable;

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        throw new \Exception("must implements this handle method");
    }


}
