<?php

namespace Ricventu\LaravelRouteViewer\Commands;

use Illuminate\Console\Command;

class LaravelRouteViewerCommand extends Command
{
    public $signature = 'laravel-route-viewer';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
