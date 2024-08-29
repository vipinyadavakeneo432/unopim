<?php

namespace Webkul\Core\Console\Commands;

use Illuminate\Console\Command;

class UnoPimVersion extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'unopim:version';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Displays current version of UnoPim installed';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->comment('v'.core()->version());
    }
}