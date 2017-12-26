<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class RefreshSeed extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'lara:refresh {--F|force : Force the operation to run without confirmation.}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        if ($this->option('force')) {

            $this->commandOperations();

            return;
        }

        if ($this->confirm('Continue to refresh and seeding all databases with force?')) {

            $this->commandOperations();
        }
    }

    public function commandOperations(){
        $this->info('');

        $this->info('[START] Refresh and seeding main database..........');

        $this->callSilent('migrate:reset', ['--force' => true]);

        $this->callSilent('migrate:refresh', [
            '--seed'  => true,
            '--force' => true
        ]);

        $this->info('[DONE ] Refresh and seeding main database.');

        if ($this->confirm('Install example data?')) {

            $this->info('[START] Install example data..........');

            $this->call('db:seed', ['--class' => 'ExampleDataSeeder']);

            $this->info('[DONE ] Install example data.');
        }

        $this->info('');
    }
}
