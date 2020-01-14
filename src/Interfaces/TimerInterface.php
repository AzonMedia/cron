<?php
declare(strict_types=1);

namespace Azonmedia\Cron\Interfaces;

interface TimerInterface
{
    /**
     * Adds a new timer that will execute the $callable every $milliseconds.
     * Returns the timer ID
     * @param int $milliseconds
     * @param callable $callable
     * @return mixed
     */
    public function tick(int $milliseconds, callable $callable) /* scalar */ ;
}