<?php

namespace Deveodk\DeveoCommands\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class FreshDbCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'deveo:fresh-db';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Creates a completely fresh and seeded database, along with Passport installation.';

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
     * @return void
     */
    public function handle()
    {
        $this->line('Clearing and seeding the database...');
        Artisan::call('migrate:fresh --seed');

        $this->line('Installing Passport...');
        Artisan::call('passport:install');

        $this->info('DONE! 🤘');
    }
}
