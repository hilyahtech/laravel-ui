<?php

namespace Hilyahtech\Ui;

use Illuminate\Console\Command;

class HilyahUi extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'hilyahtech:ui
                            { type : The preset type bulma }';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Swap the front-end scaffolding for the application';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        if (!in_array($this->argument('type'), ['bulma'])) {
            return $this->comment('The preset type bulma');
        }

        $this->{$this->argument('type')}();
    }

    protected function bulma()
    {
        Presets\Bulma::install();
        
        $this->info('Bulma scaffolding installed successfully.');
        $this->comment('Please run "npm install && npm run dev" or "yarn && yarn dev" to compile your fresh scaffolding.');
    }
}