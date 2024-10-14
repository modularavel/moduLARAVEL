<?php

namespace Modularavel\Modularavel\Commands;

use Illuminate\Console\Command;

class ModularavelCommand extends Command
{
    public $signature = 'modularavel';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
