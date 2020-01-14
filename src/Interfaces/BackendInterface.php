<?php
declare(strict_types=1);

namespace Azonmedia\Cron\Interfaces;

interface BackendInterface
{
    /**
     * Sends asynchronously task for execution and returns the task ID.
     * @param callable $callable The callable to be executed
     * @param scalar $destination To which worker/queue needs to be posted
     * @return scalar The task ID
     */
    public function execute_async(callable $callable, /* scalar */ $destination = NULL) /* scalar */ ;

    public function execute_return(callable $callable, /* scalar */ $destination = NULL, int $timeout = 0) /* mixed */ ;
}