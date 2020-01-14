<?php
declare(strict_types=1);

namespace Azonmedia\Cron\Backends;

use Azonmedia\Cron\Interfaces\ParserInterface;

class PhpParser implements ParserInterface
{

    /**
     * PhpParser constructor.
     * The config contains php callables
     * @param array $config
     */
    public function __construct(array $config)
    {
    }

    /**
     * @inheritDoc
     */
    public function get_all_jobs(): iterable
    {
        // TODO: Implement get_all_jobs() method.
    }

    /**
     * @inheritDoc
     */
    public function get_current_jobs(): iterable
    {
        // TODO: Implement get_current_jobs() method.
    }
}