<?php

namespace IbrahimBougaoua\FilamentLoginAs\Commands;

use Illuminate\Console\Command;

class FilamentLoginAsCommand extends Command
{
    public $signature = 'filament-login-as';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
