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
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //
    }


}
