<?php

namespace Deveodk\DeveoCommands\Commands;

use Illuminate\Console\Command;
use Illuminate\Database\Console\Migrations\FreshCommand;
use Illuminate\Support\Facades\Artisan;

class FreshDbCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'deveo:fresh-db {--F|force : Force migration}';

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

        $migrationFlags = [
            '--seed' => true,
        ];
        if ($this->option('force')) {
            $migrationFlags['--force'] = true;
        }

        Artisan::call(FreshCommand::class, $migrationFlags);

        if (array_key_exists('Laravel\Passport\PassportServiceProvider', app()->getLoadedProviders())) {
            $this->line('Installing Passport...');
            Artisan::call('passport:install');
        }

        $this->info('DONE! 🤘');
    }
}
