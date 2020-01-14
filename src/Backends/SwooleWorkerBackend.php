<?php
declare(strict_types=1);

namespace Azonmedia\Cron\Backends;

use Azonmedia\Cron\Interfaces\BackendInterface;
use Azonmedia\Cron\Interfaces\scalar;

class SwooleWorkerBackend implements BackendInterface
{

    /**
     * @inheritDoc
     */
    public function execute_async(callable $callable, $destination = NULL)
    {
        // TODO: Implement execute_async() method.
    }

    public function execute_return(callable $callable, $destination = NULL, int $timeout = 0)
    {
        // TODO: Implement execute_return() method.
    }
}