<?php
declare(strict_types=1);

namespace Azonmedia\Cron;

use Azonmedia\Cron\Interfaces\BackendInterface;
use Azonmedia\Cron\Interfaces\ParserInterface;
use Azonmedia\Cron\Interfaces\TimerInterface;

class Cron
{

    private ParserInterface $Parser;
    private BackendInterface $Backend;
    private TimerInterface $Timer;

    public function __construct(ParserInterface $Parser, BackendInterface $Backend, TimerInterface $Timer)
    {
        $this->Parser = $Parser;
        $this->Backend = $Backend;
        $this->Timer = $Timer;

        $this->Timer->tick(1000, [$this, 'execute_crons']);
    }

    private function execute_crons() : void
    {
        //check which jobs are to be executed at this time
        //pass these jobs to the backend for execution
        $jobs = $this->Backend->get_current_jobs();
        foreach ($jobs as $callable) {
            $this->Backend->execute_async($callable);
        }
    }
}