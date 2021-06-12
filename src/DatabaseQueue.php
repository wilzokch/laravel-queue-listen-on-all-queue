<?php

namespace Wilzokch\LaravelQueue;

use Illuminate\Support\Arr;

class DatabaseQueue extends \Illuminate\Queue\DatabaseQueue {
    protected function getNextAvailableJob($queue)
    {
        $job = $this->database->table($this->table)
            ->lockForUpdate()
            ->where(function ($query) {
                $this->isAvailable($query);
                $this->isReservedButExpired($query);
            })
            ->orderBy('id', 'asc')
            ->first();
        
        return $job ? (object) $job : null;
    }
}