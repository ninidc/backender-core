<?php

namespace Backender\Core\Commands;

use Illuminate\Console\Command;

class BuildJsonFileRoutes extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'backender:route-json';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate backender routes for javascript.';

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
    }
}
