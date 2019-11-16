<?php

namespace Queue\Interfaces\Contracts\Redis;

interface Factory
{
    /**
     * Get a Redis connection by name.
     *
     * @param  string  $name
     */
    public function connection($name = null);
}

