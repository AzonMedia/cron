<?php
declare(strict_types=1);

namespace Azonmedia\Cron\Interfaces;


interface ParserInterface
{

    /**
     * Returns all configured jobs.
     * Returns an twodimensional array:
     * [0]['time_settings'] = 'when is to be executed'
     * [0]['callable'] = 'filesystem path or PHP callable'
     * @return iterable
     */
    public function get_all_jobs() : iterable ;

    /**
     * Returns all jobs that are to be executed NOW.
     * @return iterable
     */
    public function get_current_jobs() : iterable ;
}