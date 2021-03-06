<?php

namespace App\Modules;

use App\Wss\WssConnection;

class Command
{
    protected WssConnection $wssConnection;

    public function __construct(WssConnection $connection)
    {
        $this->wssConnection = $connection; 
    }
}
