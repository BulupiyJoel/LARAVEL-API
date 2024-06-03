<?php

namespace App\Console\Commands;

use Illuminate\Support\Str;
use Illuminate\Console\Command;
use Illuminate\Foundation\Console\MailMakeCommand;

class rmmr extends Command {
    /**
    * The name and signature of the console command.
    *
    * @var string
    */
    protected $signature = 'app:rmmr';

    /**
    * The console command description.
    *
    * @var string
    */
    protected $description = 'Create a request|model|migration|resource for the specified param';

    /**
    * Execute the console command.
    */

    public function handle() {

        $resourceName = $this->argument("Excel");
        // Assuming 'esource' is the argument passed to the command

        // Generate the request class
        $this->call( 'make:request '.$resourceName);

        // Generate the model class
        $this->call( 'make:model '.$resourceName);

        // Generate the migration file
        $this->call( 'make:migration '.$resourceName);

        // Generate the resource class
        $this->call('make:resource '.$resourceName);
    }
}
