<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Rebuild extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'madewow:rebuild {--F|force : Force the operation to run without confirmation.}';

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
        // if ($this->option('force')) {
            // $this->commandOperations();
            // return;
        // }
//
        // if ($this->confirm('Yakin nih mau rebuild?')) {
            $this->commandOperations();
        // }
    }
    public function commandOperations()
    {
        $this->call('madewow:refresh', ['--force' => true]);

        $this->info('[START] Flush the application cache..........');

        $this->callSilent('cache:clear');

        $this->info('[DONE ] Flush the application cache.');

        $this->info('');


        $this->info('[START] Remove the configuration cache file..........');

        $this->callSilent('config:clear');

        $this->info('[DONE ] Remove the configuration cache file.');

        $this->info('');


        $this->info('[START] Remove the route cache file..........');

        $this->callSilent('route:clear');

        $this->info('[DONE ] Remove the route cache file.');

        $this->info('');


        $this->info('[START] Clear all compiled view files..........');

        $this->callSilent('view:clear');

        $this->info('[DONE ] Clear all compiled view files.');

        $this->info('');


        $this->info('[START] Flush expired password reset tokens..........');

        $this->callSilent('auth:clear-resets');

        $this->info('[DONE ] Flush expired password reset tokens.');

        $this->info('');


        $this->info('[START] Clear compiled class files..........');

        $this->callSilent('clear-compiled');

        $this->info('[DONE ] Clear compiled class files.');

        $this->info('');


        $this->info('[START] Optimize for better performance..........');

        $this->callSilent('optimize');

        $this->info('[DONE ] Optimize for better performance.');

        $this->info('');
    }
}
